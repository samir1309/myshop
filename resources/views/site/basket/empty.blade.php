@extends('layouts.site.master')
@section('content')
<!-- =======================
Page Banner START -->
<section class="py-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 text-center rounded-3">
					<h1 class="m-0 fs-2">سبد خرید</h1>
					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-0">
								<li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
								<li class="breadcrumb-item"><a href="#">صفحات</a></li>
								<li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Image -->
				<img src="{{asset('assets/site/images/element/cart.svg') }}" class="h-200px h-md-300px mb-3" alt="">
				<!-- Subtitle -->
				<h2 class="fs-4">سبد خرید شما در حال حاضر خالی است!</h2>
				<!-- info -->
				<p class="mb-0">لطفاً تمام دوره های موجود را بررسی کنید و دوره هایی را خریداری کنید که نیازهای شما را برآورده می کند.</p>
				<!-- Button -->
				<a href="{{route('site.home')}}" class="btn btn-primary mt-4 mb-0">بازگشت به خانه</a>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page content END -->

@stop