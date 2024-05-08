

@extends('site.panel.master')
@section('robots'){{'noindex ,nofollow' }}@stop
@section('content')



<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

		@include('site.panel.sidebar')

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Counter boxes START -->
				<div class="row mb-4">
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="9"	data-purecounter-delay="200">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">دوره ها</p>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-clipboard-check fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="52"	data-purecounter-delay="200">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">ویدیو</p>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
							<span class="display-6 lh-1 text-success mb-0"><i class="fas fa-medal fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="8" data-purecounter-delay="300">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">مدارک معتبر</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter boxes END -->

				<div class="card bg-transparent border rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0 fs-5 ff-vb">لیست دوره های من</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجوی دوره" aria-label="Search">
									<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">مرتب سازی</option>
										<option>رایگان</option>
										<option>جدیدترین</option>
										<option>پربازدیدترین</option>
										<option>پرفروش ترین</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Course list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">دوره</th>
										<th scope="col" class="border-0">کل دوره ها</th>
										<th scope="col" class="border-0">دوره های تکمیل</th>
										<th scope="col" class="border-0 rounded-end">عملیات</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="fw-normal"><a href="#">دوره جامع آموزش Sketch</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">85%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>56</td>

										<!-- Table data -->
										<td>40</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>ادامه</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/03.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="fw-normal"><a href="#">دوره جامع آموزش Figma</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">100%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>42</td>

										<!-- Table data -->
										<td>42</td>

										<!-- Table data -->
										<td>
											<button class="btn btn-sm btn-success me-1 mb-1 mb-x;-0 disabled"><i class="bi bi-check me-1"></i>تکمیل شده</button>
											<a href="#" class="btn btn-sm btn-light me-1"><i class="bi bi-arrow-repeat me-1"></i>راه اندازی مجدد</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/05.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="fw-normal"><a href="#">دوره جامع آموزش Python</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">60%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>28</td>

										<!-- Table data -->
										<td>12</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>ادامه</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/01.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="fw-normal"><a href="#">دوره جامع آموزش Laravel</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">40%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>
										<!-- Table data -->
										<td>32</td>

										<!-- Table data -->
										<td>18</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>ادامه</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/02.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="fw-normal"><a href="#">دوره جامع آموزش Photoshop</a></h6>
													<!-- Info -->
													<div class="overflow-hidden">
														<h6 class="mb-0 text-end">90%</h6>
														<div class="progress progress-sm bg-primary bg-opacity-10">
															<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>
										<!-- Table data -->
										<td>16</td>

										<!-- Table data -->
										<td>14</td>
										
										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>ادامه</a>
										</td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Course list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
									<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-right"></i></a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
					<!-- Card body START -->
				</div>
			<!-- Main content END -->
			</div><!-- Row END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->
@stop
<script>
if(session('alert-type')) {
        Swal.fire({
            icon: 'info',
            text: "شماره همراه نامعتبر است",
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
    e.target.value = "";
    
    return false;
    }
    </script>