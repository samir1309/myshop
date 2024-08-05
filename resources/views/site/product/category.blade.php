@extends('layouts.site.master')
@section('content')

<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-1  mt-4 py-5">
			
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="fs-3">انتخاب دسته بندی  {{$category->title}} </h2>
				<p class="mb-0">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
			</div>
		</div>

		<div class="row g-4">
			<!-- Item -->
            @foreach($courses as $course)

		
			<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#"> {{ $course->title }} </a></h5>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>15 ویدیو</span>
								</div>
							</div>
						</div>
					</div>

            @endforeach


			<div class="description">

  							@if($category->description != null)
                                <div class="text-secondary text-justify" style="height: 19rem;overflow-y: scroll;">
                                    {!! @$category->description !!}
                                </div>
                            @endif


</div>


		</div>
	</div>
</section>

@stop