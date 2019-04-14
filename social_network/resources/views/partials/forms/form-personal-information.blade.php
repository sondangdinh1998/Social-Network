<!-- Personal Information Form  -->
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            {{$err}}<br />
        @endforeach
    </div>
@endif

@if(!empty($status))
    <div class="alert alert-danger">
        {{$status}}
	</div>
@endif

<form method="POST" action="{{route('profile_save_info', ['id' => Auth::id()])}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">

		<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group label-floating">
				<label class="control-label">First Name</label>
				<input name="first_name" class="form-control" placeholder="" type="text" value="{{$user->first_name}}" required>
			</div>

			<div class="form-group label-floating">
				<label class="control-label">Your Email</label>
				<input name="email" class="form-control" placeholder="" type="email" value="{{$user->email}}" readonly>
			</div>

			<div class="form-group date-time-picker label-floating">
				<label class="control-label">Your Birthday</label>
				<input name="birth_date" value="{{$profile->birth_date}}" />
				<span class="input-group-addon">
					<svg class="olymp-month-calendar-icon icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-month-calendar-icon')}}"></use></svg>
				</span>
			</div>
		</div>

		<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group label-floating">
				<label class="control-label">Last Name</label>
				<input name="last_name" class="form-control" placeholder="" type="text" value="{{$user->last_name}}">
			</div>

			<div class="form-group label-floating">
				<label class="control-label">Your Address</label>
				<input name="address" class="form-control" placeholder="" type="text" value="{{$profile->address}}">
			</div>


			<div class="form-group label-floating">
				<label class="control-label">Your Phone Number</label>
				<input name="phone" class="form-control" placeholder="" type="text" value="{{$profile->phone}}">
			</div>
		</div>

		<!-- <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="form-group label-floating is-select">
				<label class="control-label">Your Country</label>
				<select class="selectpicker form-control">
					<option value="US">United States</option>
					<option value="AU">Australia</option>
				</select>
			</div>
		</div>
		<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="form-group label-floating is-select">
				<label class="control-label">Your State / Province</label>
				<select class="selectpicker form-control">
					<option value="CA">California</option>
					<option value="TE">Texas</option>
				</select>
			</div>
		</div>
		<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="form-group label-floating is-select">
				<label class="control-label">Your City</label>
				<select class="selectpicker form-control">
					<option value="SF">San Francisco</option>
					<option value="NY">New York</option>
				</select>
			</div>
		</div> -->
		<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group label-floating">
				<label class="control-label">About You</label>
				<textarea name="about_me" class="form-control" placeholder="">{{$profile->about_me}}</textarea>
			</div>

			<!-- <div class="form-group label-floating is-select">
				<label class="control-label">Your Gender</label>
				<select name="gender" class="selectpicker form-control">
					@if ($profile->gender == "Male")
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					@else
					<option value="Female">Female</option>
					<option value="Male">Male</option>
					@endif
				</select>
			</div> -->

			<!-- <div class="form-group label-floating is-empty">
				<label class="control-label">Religious Belifs</label>
				<input class="form-control" placeholder="" type="text">
			</div> -->
		</div>
		<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
			<!-- <div class="form-group label-floating is-empty">
				<label class="control-label">Your Birthplace</label>
				<input class="form-control" placeholder="" type="text">
			</div> -->

			<!-- <div class="form-group label-floating">
				<label class="control-label">Your Occupation</label>
				<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
			</div> -->
			<div class="form-group label-floating is-select">
				<label class="control-label">Your Gender</label>
				<select name="gender" class="selectpicker form-control">
					@if ($profile->gender == "Male")
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					@else
					<option value="Female">Female</option>
					<option value="Male">Male</option>
					@endif
				</select>
			</div>
			<div class="form-group label-floating is-select">
				<label class="control-label">Status</label>
				<select name="status" class="selectpicker form-control">
					@if ($profile->status == "Married")
					<option value="Married">Married</option>
					<option value="NotMarried">Not Married</option>
					@else
					<option value="NotMarried">Not Married</option>
					<option value="Married">Married</option>
					@endif
				</select>
			</div>

			<!-- <div class="form-group label-floating">
				<label class="control-label">Political Incline</label>
				<input class="form-control" placeholder="" type="text" value="Democrat">
			</div> -->
		</div>
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="form-group with-icon label-floating">
				<label class="control-label">Your Facebook Account</label>
				<input class="form-control" type="text" value="www.facebook.com/james-spiegel95321">
				<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
			</div>
			<div class="form-group with-icon label-floating">
				<label class="control-label">Your Twitter Account</label>
				<input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
				<i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
			</div>
			<div class="form-group with-icon label-floating is-empty">
				<label class="control-label">Your RSS Feed Account</label>
				<input class="form-control" type="text">
				<i class="fa fa-rss c-rss" aria-hidden="true"></i>
			</div>
			<div class="form-group with-icon label-floating">
				<label class="control-label">Your Dribbble Account</label>
				<input class="form-control" type="text" value="www.dribbble.com/thecowboydesigner">
				<i class="fab fa-dribbble c-dribbble" aria-hidden="true"></i>
			</div>
			<div class="form-group with-icon label-floating is-empty">
				<label class="control-label">Your Spotify Account</label>
				<input class="form-control" type="text">
				<i class="fab fa-spotify c-spotify" aria-hidden="true"></i>
			</div>
		</div>
		<!-- <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
			<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
		</div> -->
		<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
			<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
		</div>

	</div>
</form>

<!-- ... end Personal Information Form  -->