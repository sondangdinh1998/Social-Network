<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hobbie;
use App\Profile;
use Auth;

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

    public function save_info($id){
        
    }
}
