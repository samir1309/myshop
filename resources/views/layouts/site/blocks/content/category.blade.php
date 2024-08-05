
<section>
	<div class="container">
		<div class="row g-4">
		@foreach($category as $key => $cat)
			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-{!! @$cat ->color !!}  bg-opacity-10 rounded-circle text-{!! @$cat ->color !!} "><i class="{!! @$cat ->title_en !!}"></i></div>
						<div class="ms-3">
							<h5 class="mb-0 fw-normal"><a href="#" class="stretched-link"> {!! @$cat ->title !!} </a></h5>
							<span>89 دوره</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- =======================
Category END -->
