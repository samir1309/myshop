@extends('layouts.site.master')
@section('content')

Page Banner START -->
<section class="pt-5 pb-0" style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-6 text-center mx-auto">
				<!-- Title -->
				<h6 class="text-primary">تماس با ما</h6>
				<h1 class="mb-4 fs-4">ما برای کمک اینجا هستیم!</h1>
			</div>
		</div>
		
		<!-- Contact info box -->
		<div class="row g-4 g-md-5 mt-0 mt-lg-3">
			<!-- Box item -->
		

			<!-- Box item -->
			<div class="col-lg-4 mt-lg-0">
				<div class="card card-body shadow py-5 text-center h-100">
					<!-- Title -->
					<h5 class="mb-3 fw-normal">اطلاعات تماس</h5>
					<ul class="list-inline mb-0">
						<!-- Address -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>تهران، میدان فردوسی، نرسیده به ولیعصر مجتمع صبا </a>
						</li>
						<!-- Phone number -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>09320000000 </a>
						</li>
						<!-- Email id -->
						<li class="list-item mb-0 h6 fw-light">
							<a href="#"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Box item -->
			<div class="col-lg-4 mt-lg-0">
				<div class="card card-body shadow py-5 text-center h-100">
					<!-- Title -->
					<h5 class="mb-3 fw-normal">اطلاعات تما</h5>
					<ul class="list-inline mb-0">
						<!-- Address -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>{{@$setting->aboutshort }} </a>
						</li>
						<!-- Phone number -->
						<li class="list-item mb-3 h6 fw-light">
							<a href="#"> <i class="fas fa-fw fa-phone-alt me-2"> {{@$setting->phone }}</i></a>
						</li>
						<!-- Email id -->
						<li class="list-item mb-0 h6 fw-light">
							<a href="#"> <i class="far fa-fw fa-envelope me-2"> {{@$setting->email }}</i> </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Image and contact form START -->
<section >
	<div class="container">
		<div class="row g-4 g-lg-0 align-items-center">

			<div class="col-md-6 align-items-center text-center">
				<!-- Image -->
				<img src="{{asset('assets/site/images/element/contact.svg')}}" class="h-400px" alt="">

				<!-- Social media button -->
				<div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
					<h5 class="mb-0">ما را دنبال کنید:</h5> 
					<ul class="list-inline mb-0 ms-sm-2">
						<li class="list-inline-item"> <a class="fs-5 me-1 text-facebook" href="#"><i class="fab fa-fw fa-facebook-square"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-dribbble" href="#"><i class="fas fa-fw fa-basketball-ball"></i></a> </li>
						<li class="list-inline-item"> <a class="fs-5 me-1 text-pinterest" href="#"><i class="fab fa-fw fa-pinterest"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Contact form START -->
			<div class="col-md-6">
				<!-- Title -->
				<h2 class="mt-4 mt-md-0 fs-4">با ما در ارتباط باشید</h2>
				<p>برای درخواست نمایندگی لطفا با بخش فروش شرکت تماس بگیرید یا فرم را پر کنید سپس همکاران ما با شما تماس خواهند گرفت.</p>
					
				<form>
					<!-- Name -->
					<div class="mb-4 bg-light-input">
						<label for="yourName" class="form-label">نام و نام خانوادگی *</label>
						<input type="text" class="form-control form-control-lg" id="yourName">
					</div>
					<!-- Email -->
					<div class="mb-4 bg-light-input">
						<label for="emailInput" class="form-label">ایمیل *</label>
						<input type="email" class="form-control form-control-lg" id="emailInput">
					</div>
					<!-- Message -->
					<div class="mb-4 bg-light-input">
						<label for="textareaBox" class="form-label">متن درخواست *</label>
						<textarea class="form-control" id="textareaBox" rows="4"></textarea>
					</div>
					<!-- Button -->
					<div class="d-grid">
						<button class="btn btn-lg btn-primary mb-0" type="button">ارسال</button>
					</div>	
				</form>
			</div>
			<!-- Contact form END -->
		</div>
	</div>
</section>
<!-- =======================
Image and contact form END -->

@stop