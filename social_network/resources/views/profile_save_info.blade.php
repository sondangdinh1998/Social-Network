@extends('layouts.master')
<!-- <body> -->
@section('content')
{{--@include('partials.headers-navigations.left-panel')--}}

@include('partials.headers-navigations.left-panel-responsive')

@include('partials.headers-navigations.right-panel')

@include('partials.headers-navigations.right-panel-responsive')

@include('partials.headers-navigations.header-BP')

@include('partials.headers-navigations.header-BP-responsive')

<div class="header-spacer header-spacer-small"></div>

@include('partials.headers-navigations.main-header-account')

<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					@include('partials.forms.form-personal-information')

				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
			<div class="ui-block">

            @include('partials.headers-navigations.your-profile')

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->
@include('partials.windows-popup.window-chat-responsive')

@include('partials.back-to-top')
@endsection