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
			@foreach($products as $course)  
    <div class="col-md-6 col-lg-4 col-xxl-3">  
        <div class="card p-2 shadow h-100">  
            <div class="rounded-top overflow-hidden">  
			<a href="{{ route('site.product.details', $course->url) }}"> 
                <div class="card-overlay-hover">  
                    <!-- Image -->  
                    <img src="{{ asset('assets/uploads/content/pro/big/'. $course->image )}}" class="card-img-top" alt="course image">  
                </div>  
            </div>  

            <!-- Card body -->  
            <div class="card-body px-2">  
                <h5 class="card-title fw-normal"><a href="{{ route('site.product.details', $course->url) }}"> {{$course->title}}</a></h5>  
                <!-- Badge and Price -->  
                <div class="d-flex justify-content-between align-items-center">  
				@if ($course->categories->first())  
    <a href="{{ route('site.product.category' , $course->categories->first()->url ) }}" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>  
        {{ $course->categories->first()->title }}  
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
		</div>
		<!-- Button -->
		<div class="text-center mt-5">
			<a href="#" class="btn btn-primary-soft">مشاهده همه<i class="fas fa-sync ms-2"></i></a>
		</div>
	</div>
</section>

</main>
@stop


