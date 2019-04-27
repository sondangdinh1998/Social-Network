<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hobbie;
use App\Profile;
use Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Response;

class ProfileController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }

    public function secure($id){
        $user = User::where('id', $id)->first();

        if ($user){
            $is_my_profile = (Auth::id() == $id)?true:false;
            if (!$is_my_profile){
                return false;
            }
            return true;
        }
        return false;
    }

    public function index($id) {
        if (!$this->secure($id)) return redirect('/404');
        $profile_info = Profile::where('id', $id)->first();
        return view('profile', ['profile_info'=>$profile_info]);
    }

    public function get_profile_save_info($id){
        $user = Auth::user();
        $profile = Profile::where('id', $user->id)->first();
        return view('profile_save_info', ['user' => $user, 'profile' => $profile]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function update(array $data, $id) {
        User::where('id', $id)->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
        ]);

        Profile::where('id', $id)->update([
            'about_me' => $data['about_me'],
            'birth_date' => $data['birth_date'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            // 'status' => $data['status'],
        ]);
    }

    public function profile_save_info(Request $request, $id){
        $allRequest  = $request->all();	
        $validator = $this->validator($allRequest);
        if ($validator->fails()) {
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            return view('profile_save_info', ['user' => Auth::user(), 'profile' => Profile::find($id)])->withErrors($validator)->withInput();
        } else {   
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            $this->update($allRequest, $id);
            // Insert thành công sẽ hiển thị thông báo
            $status = "Cập nhật thông tin cá nhân thành công!";
            return view('profile_save_info', ['user' => Auth::user(), 'profile' => Profile::find($id), 'status' => $status]);           
        }
    }

    public function update_profile_photo(Request $request, $id) {
        if (!$this->secure($id)) return Response::json($response);

        $messages = [
            'image.required' => trans('validation.required'),
            'image.mimes' => trans('validation.mimes'),
            'image.max.file' => trans('validation.max.file'),
        ];
        $validator = Validator::make(['image' => $request->file('image')], [
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('profile_id', ['user' => Auth::user()])->withErrors($validator)->withInput();
        }
        else {
            $img = $request->file('image');
            // $img = Image::make($img)->resize(36,36);
            $file_name = md5(uniqid() . time()) . '.' . $img->getClientOriginalExtension();
            if ($img->storeAs('profile_photo', $file_name)){
                $profile = Profile::find($id);
                $profile->profile_path = $file_name;
                $profile->save();
                return redirect()->route('profile_id', ['id' => Auth::id(), 'status' => 'Success']);
            }
            else {
                return redirect()->route('profile_id', ['id' => Auth::id(), 'status' => 'Failed']);        
            }
        }
    }
}
