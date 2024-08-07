@extends('layouts.site.master')
@section('content')
   
<main>

		@include('layouts.site.blocks.content.header')

<!-- =======================
Main Banner END -->

<!--Category START -->
@include('layouts.site.blocks.content.category')



<!-- =======================
Counter END -->

<!-- =======================
Category END -->

<!-- =======================
Featured course START -->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-right my-auto">
			
				<h2 class="fs-3 mb-0 ">
				@include('layouts.site.blocks.content.headicon')
				دوره های ویژه جشنواره &nbsp;</h2>
			
			</div>
		</div>

		<div class="row g-4">
			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">9.1k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.5</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">آموزش ساخت سایت خبری با لاراول</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> برنامه نویسی </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">140 تومان</h5>
						</div>
					</div>
				</div>
			</div>	
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/18.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">2.5k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.6</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">آموزش مقدماتی کتابخانه Pygame</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> استارت آپ </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">160 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/21.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">6k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.8</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">آموزش ساخت شبکه اجتماعی با MERN</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> بهینه سازی </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">226 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/20.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">15k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.8</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">دوره بازاریابی دیجیتال برای مبتدیان</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> طراحی وب </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">342 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/15.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">8k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.6</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">آموزش رایگان مایکروسافت پروجکت MSP</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> تکنولوژی </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">245 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/14.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.0</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">طراحی های خلاقانه رابط کاربری وب</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> برنامه نویسی موبایل </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">199 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/19.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">6k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.0</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#"> معماری میکروفرانت اند ها در React </a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> بانک اطلاعات</a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">215 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/16.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2">2k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.5</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title fw-normal"><a href="#">آموزش کاربردی گیت و گیت هاب</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> مهندسی نرم افزار</a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">112 تومان</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

		</div>
		<!-- Button -->
		<div class="text-center mt-5">
			<a href="#" class="btn btn-primary-soft">مشاهده همه<i class="fas fa-sync ms-2"></i></a>
		</div>
	</div>
</section>
<!-- =======================
Featured course END -->
<!--Action box START -->
<section class="py-0">
	<div class="container">
		<div class="row g-4">
			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="assets/images/element/08.svg" class="h-100px h-sm-200px" alt="">
					</div>	
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h2 class="mb-1 h4">اعطای مدرک معتبر</h2>
							<p class="mb-3 h5 fw-light">برنامه گواهینامه حرفه ای مناسب را برای خود دریافت کنید.</p>
							<a href="#" class="btn btn-primary mb-0">مشاهده</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="assets/images/element/15.svg" class="h-100px h-sm-200px" alt="">
					</div>	
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h2 class="mb-1 h4">بهترین دوره های آنلاین</h2>
							<p class="mb-3 h5 fw-light">اکنون در محبوب ترین و بهترین دوره ها ثبت نام کنید.</p>
							<a href="#" class="btn btn-warning mb-0">مشاهده</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->


<!-- =======================
Gallery START-->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-3 mb-sm-4">
			<div class="col-12 mx-auto text-center">
				<h2 class="fs-1 fw-bold fs-3">
					<span class="position-relative z-index-9">گالـری </span>
					<span class="position-relative z-index-1">تصاویر
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
							<svg style="transform: scale(-1,1)" class="fill-orange" width="150" height="86" viewBox="0 0 303 86">
								<path d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z"/>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h2>
			</div>
		</div>

		<!-- Image gallery START -->
		<div class="row g-4">

			<div class="col-lg-4">
				<div class="row g-4">

					<!-- Image -->
					<div class="col-md-6">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/11.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/11.jpg">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
							</a>
						</div>
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/12.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/12.jpg">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
							</a>
						</div>
					</div>

					<!-- Image -->
					<div class="col-12">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/14.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/14.jpg">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card overflow-hidden">
					<div class="card-overlay-hover">
						<!-- Image -->
						<img src="assets/images/event/17.jpg" class="rounded-3" alt="course image">
					</div>
					<!-- Full screen button -->
					<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/17.jpg">
						<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
					</a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="row g-4">

					<!-- Video -->
					<div class="col-12">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/16.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="https://www.aparat.com/video/video/embed/videohash/31hor/vt/frame">
								<span class="btn text-danger btn-round btn-white-shadow mb-0 position-absolute top-50 start-50 translate-middle">
									<i class="fas fa-play"></i>
								</span>
							</a>
						</div>
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/13.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/13.jpg">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
							</a>
						</div>
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<div class="card overflow-hidden">
							<div class="card-overlay-hover">
								<!-- Image -->
								<img src="assets/images/event/15.jpg" class="rounded-3" alt="course image">
							</div>
							<!-- Full screen button -->
							<a class="card-element-hover position-absolute w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/event/15.jpg">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
							</a>
						</div>
					</div>

				</div> <!-- Row END -->
			</div>
		</div>
		<!-- Image gallery END -->
	</div>
</section>
<!-- =======================
Gallery START-->

<!-- =======================
Blog START-->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-3 mb-sm-4">
			<div class="col-12 mx-auto text-center">
				<h2 class="h1 fs-3">
					<span class="position-relative z-index-9">جدیدترین</span>
					<span class="position-relative z-index-1"> اخبـار و وبلاگ
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
							<svg style="transform: scale(-1,1)" class="fill-orange" width="150" height="86" viewBox="0 0 303 86">
								<path d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z"/>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h2>
			</div>
		</div>

		<div class="row g-4 justify-content-between">

			<div class="col-md-5">
				<!-- Card START -->
				<div class="card bg-transparent">
					<!-- Image -->
					<img src="assets/images/event/18.jpg" class="card-img" alt="">

					<!-- Card body -->
					<div class="card-body px-3">
						<h4 class="fs-5 ff-vb"><a href="#" class="stretched-link">فریم ورک‌ها و کتابخانه‌های CSS برای پروژه</a></h4>
						<p>مان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
						<div class="d-flex justify-content-between">
							<h6>سارا حسینی</h6>
							<span>29 مرداد 1400</span>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-md-7">
				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">15</h2>
								<span class="text-white">تیر 1400</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link">چطور یک پروژه برنامه نویسی را مرحله به مرحله بسازیم؟</a></h5>
								<p class="mb-0">ناصر احمدی</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<hr class="my-4">

				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">12</h2>
								<span class="text-white">خرداد 1400</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link">افراد مسلط به اکسل ، چه درآمدی دارند و کجا استخدام می شوند؟</a></h5>
								<p class="mb-0">میثم قربانی</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<hr class="my-4">

				<!-- Card START -->
				<div class="card bg-transparent">
					<div class="row align-items-center">
						<div class="col-sm-4 col-lg-3">
							<div class="bg-dark text-center p-3 rounded-2 mb-2 mb-sm-0">
								<h2 class="text-white">09</h2>
								<span class="text-white">فروردین</span>
							</div>
						</div>
						<div class="col-sm-8 col-lg-9">
							<div class="card-body p-0">
								<h5 class="card-title"><a href="#" class="stretched-link"> قدرتمندترین مزایای استفاده از AngularJS برای توسعه برنامه‌های وب</a></h5>
								<p class="mb-0">قاسم اصلانی</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Blog START-->

</main>
@stop


