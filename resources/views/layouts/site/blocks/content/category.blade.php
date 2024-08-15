<section>
	<div class="container">
		<div class="row g-4">
		@foreach($categories as $key => $cat)
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-body bg-{!! @$cat ->color !!}  bg-opacity-10 text-center position-relative btn-transition p-4">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
					<img src="{{asset('assets/uploads/content/cat/medium/'.$cat->cover)}}" loading="lazy" width="100%" height="100%">

					</div>
					<!-- Title -->
					<h5 class="mb-2"><a href="{{  route('site.product.category' , $cat->url ) }}" class="stretched-link">{!! @$cat ->title !!}</a></h5>
				
				</div>
			</div>


			@endforeach
		</div>
	</div>
</section>
<!-- =======================
Category END -->
