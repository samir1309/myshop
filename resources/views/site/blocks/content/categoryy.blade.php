
<section class="py-0 py-xl-5">
	<div class="container">
		<div class="row g-4">
			<!-- Counter item -->
			@foreach($category as $key => $cat)
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
					<span class="display-6 lh-1 text-warning mb-0"><i class="{!! @$cat ->url !!} "></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10"	data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">  {!! @$cat ->title !!}  </span>
						</div>
						<p class="mb-0">آموزش آنلاین</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>