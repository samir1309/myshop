<section>
	<div class="container">
		<div class="row g-4">
		@foreach($category as $key => $cat)
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-body bg-{!! @$cat ->color !!}  bg-opacity-10 text-center position-relative btn-transition p-4">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
					<i class="fas fa-dancer"></i>
					<i class="{{ $cat->title_en }}"></i>
					</div>
					<!-- Title -->
					<h5 class="mb-2"><a href="#" class="stretched-link">{!! @$cat ->title !!}</a></h5>
				
				</div>
			</div>


			@endforeach
		</div>
	</div>
</section>
<!-- =======================
Category END -->
