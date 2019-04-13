@extends('layouts.master')

@section('content')

@include('partials.headers-navigations.left-panel-responsive')

@include('partials.headers-navigations.right-panel')

@include('partials.headers-navigations.right-panel-responsive')

@include('partials.headers-navigations.header-BP')

@include('partials.headers-navigations.header-BP-responsive')


<div class="header-spacer"></div>
@include('partials.headers-navigations.top-header-profile')



<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">James’s Photo Gallery</div>

					<div class="block-btn align-right">
						<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="#" data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photo-page" role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#album-page" role="tab">
								<svg class="olymp-albums-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
							</a>
						</li>

					</ul>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">
                        @include('partials.photo-items.photo-item-half')

                        @include('partials.photo-items.photo-item1')

                        @include('partials.photo-items.photo-item2')

                        @include('partials.photo-items.photo-item3')                        

                        @include('partials.photo-items.photo-item4')

                        @include('partials.photo-items.photo-item5')

                        @include('partials.photo-items.photo-item6')

                        @include('partials.photo-items.photo-item7')

                        @include('partials.photo-items.photo-item8')

                        @include('partials.photo-items.photo-item9')

                        @include('partials.photo-items.photo-item10')


						<a href="#" class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

					</div>

				</div>

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						<div class="photo-album-item-wrap col-4-width" >
                            @include('partials.photo-album-items.photo-album-item-create')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item1')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item2')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item3')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item4')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item5')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item6')
						</div>

						<div class="photo-album-item-wrap col-4-width">
                            @include('partials.photo-album-items.photo-album-item7')
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</div>

@endsection
