@extends('layouts.site.master')
@section('content')

<section>


<!-- =======================
Page Banner START -->
<section class="bg-blue align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white fs-2"> انتخاب دسته بندی  {{$category->title}}  </h1>
				<!-- Breadcrumb -->
				<div class="d-flex justify-content-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
							<li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
							<li class="breadcrumb-item active" aria-current="page">لیست نسخه 1</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->



	<div class="container">
		<!-- Title -->
		<div class="row mb-1  mt-4 py-3">
			
			
		</div>

		<div class="row g-4">
			<!-- Item -->
            @foreach($courses as $course)
				
	<div class="col-md-6 col-lg-4 col-xxl-3">  
        <div class="card p-2 shadow h-100">  
            <div class="rounded-top overflow-hidden">  
				<a href="{{ route('site.product.details', $course->url) }}">
                <div class="card-overlay-hover">  
                    <!-- Image -->  
                    <img src="{{ asset('assets/uploads/content/pro/big/'. $course->image )}}" class="card-img-top" alt="course image">  
                </div>  
                <!-- Hover element -->  
                <!-- <div class="card-img-overlay">  
                    <div class="card-element-hover d-flex justify-content-end">  
                        <a href="" class="icon-md bg-white rounded-circle">  
                            <i class="fas fa-shopping-cart text-danger"></i>  
                        </a>  
                    </div>  
                </div>   -->
            </div>  

            <!-- Card body -->  
            <div class="card-body px-2">  
                <h5 class="card-title fw-normal"><a href="{{ route('site.product.details', $course->url) }}"> {{$course->title}}</a></h5>  
                <!-- Badge and Price -->  
                <div class="d-flex justify-content-between align-items-center">  
                    @if ($course->categories)  
                        <a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>  
                 
                        </a>  
                    @endif  
                    <!-- Price -->  
                    <h3 class="text-success mb-0 fs-5">{{ number_format(intval($course->price)) }} تومان</h3>  
                </div>  
            </div>  
</a>
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