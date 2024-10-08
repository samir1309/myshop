@extends('layouts.site.master')
@section('content')
<!-- =======================
Page Banner START -->
	@if ($basket->basketItems->count() > 0 )  {
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

<section class="pt-5">
	<div class="container">
	
		<div class="row g-4 g-sm-5">
			<!-- Main content START -->
			<div class="col-lg-8 mb-4 mb-sm-0">
				<div class="card card-body p-4 shadow">
					<!-- Alert -->
					<div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2" role="alert">
						<div>
							<span class="fs-5 me-1">🔥</span>
							این دوره ها با تخفیف محدود هستند، لطفاً<strong class="text-danger ms-1"> تا 2 روز آینده </strong> تسویه حساب کنید.
						</div>
						<button type="button" class="btn btn-link mb-0 text-primary-hover text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
					</div>



					<div class="table-responsive border-0 rounded-3">
						<!-- Table START -->
						<table class="table align-middle p-4 mb-0">

							<!-- Table head -->
							<!-- Table body START -->
							<tbody class="border-top-0">
                            @foreach($basketItems as $item)  

								<tr>
									<!-- Course item -->
									<td>
										<div class="d-lg-flex align-items-center">
											<!-- Image -->
											<div class="w-100px w-md-80px mb-2 mb-md-0">
												<img src="{{ asset('assets/uploads/content/pro/medium/'. $item->product->image )}}" class="rounded" alt="">
											</div>
											<!-- Title -->
											<h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">	
												<a href="#"> {{ $item->product->title }}</a>
                                           

											</h6>
										</div>
									</td>

									<!-- Amount item -->
									<td class="text-center">
										<h5 class="text-success mb-0"> {{ number_format(intval($item->product->price)) }} تومان</h5>
									</td>
									<!-- Action item -->
									<td>
										<a href="#" class="btn btn-sm btn-success-soft px-2 me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
              



             <a href="{{ route('site.basket.destroy', $item->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">  
                Remove  
          	  </a>  
				<form id="delete-form-{{ $item->id }}" action="{{ route('site.basket.destroy', $item->id) }}" method="POST" style="display: none;">  
					@csrf  
					@method('DELETE')  
				</form>  


                                    </td>
								</tr>
                            @endforeach  

							</tbody>

                        
						</table>
                   
					</div>

				
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4">
				<!-- Card total START -->
				<div class="card card-body p-4 shadow">
					<!-- Title -->
					<h4 class="mb-3 fs-5">صورت حساب</h4>

					<!-- Price and detail -->
					<ul class="list-group list-group-borderless mb-2">
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h6 fw-light mb-0">قیمت</span>
							<span class="h6 fw-light mb-0 fw-bold">{{ number_format(intval(@$total)) }} تومان</span>
						</li>
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h6 fw-light mb-0">کد تخفیف</span>
							<span class="text-danger">20%</span>
						</li>
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h5 mb-0">قیمت نهایی</span>
							<span class="h5 mb-0">500,000 تومان</span>
						</li>
					</ul>

					<!-- Button -->
					<div class="d-grid">
						<a href="checkout.html" class="btn btn-lg btn-success">تسویه حساب</a>
					</div>

					<!-- Content -->

				</div>
				<!-- Card total END -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
@else {

	@include('site.basket.empty')
}

}
@endif
<!-- =======================
Page content END -->
@stop