@extends('layouts.master')

@section('content')
	@include('partials.headers-navigations.right-panel')

	@include('partials.headers-navigations.right-panel-responsive')

	@include('partials.headers-navigations.header-BP')

	@include('partials.headers-navigations.header-BP-responsive')

	<div class="header-spacer"></div>

	@include('partials.headers-navigations.top-header-profile')


	<div class="container">
		<div class="row">
			<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Hobbies and Interests</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
					</div>
					<div class="ui-block-content">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

								@include('partials.widgets.w-personal-info1')

							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

								@include('partials.widgets.w-personal-info2')

							</div>
						</div>
					</div>
				</div>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Education and Employement</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
					</div>
					<div class="ui-block-content">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

{{--								@include('partials.widgets.w-personal-info3')--}}

							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

{{--								@include('partials.widgets.w-personal-info4')--}}

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Personal Info</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
					</div>
					<div class="ui-block-content">

						@include('partials.widgets.w-personal-info5')

						@include('partials.widgets.w-socials')

					</div>
				</div>
			</div>
		</div>
	</div>


	@include('partials.windows-popup.update-header-photo')

	@include('partials.windows-popup.choose-from-my-photo')

	@include('partials.back-to-top')

	@include('partials.windows-popup.window-chat-responsive')'

@endsection
