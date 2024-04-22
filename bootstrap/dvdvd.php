@extends('layouts.site.master')
@section('content')


<div class="pro pro-list pb-5 pt-3">
			<div class="container">
				<div class="row w-100 m-0">
					<div class="col-12 px-2 py-md-4 py-1">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0 m-0">
								<li class="breadcrumb-item">
									<a href="/">
										<i class="bi bi-house me-1"></i>
										خانه
									</a>
								</li>
								<li class="breadcrumb-item">
										<a href="{{route('site.media.list')}}">
									همه چند رسانه ای ها
										</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										{!! @$media->title !!}
									</li>
							</ol>
						</nav>
					</div>
					
							<div class="col-xl-9 col-12 col-lg-8 p-md-3 p-sm-1 p-0 text-center">
							    <h1>	{!! @$media->title !!}  </h1>
				
		@if($media->url != null)

        		<div class="embed-responsive embed-responsive-16by9">
           {!! $media->url !!}</div>
        @else
        <div class="empty h-100 d-flex align-items-center justify-content-center">
        	<img src="{{asset('assets/site/images/emptyvd.png')}}" alt="ویدئویی موجود نیست" class="w-50 ic">
        </div>
        @endif
	<div class="description text-justify py-4">
						{!! @$media->description !!}
						</div>
				
				</div>
				﻿	<div class="col-xl-3 col-12 col-lg-4 p-0 sticky-top">          
						<div class=" sideblog sticky-top">
							<div class="col-xxl-12 p-md-3 p-1">
								<form action="" class="m-0 position-relative">
									<input type="search" name="" id=""
										class="form-control form-control-lg bg-light rounded-0 border-0 h6"
										placeholder="جستجو">
									<button type="submit" class="btn position-absolute top-0 bottom-0 end-0">
										<i class="bi bi-search text-secondary d-flex"></i>
									</button>
								</form>
							</div>
							<div class="col-xxl-12 px-0 pb-0 pt-3">
								<div class="p-2 w-100">
									<p class="ismb h5 px-2 text-first text-a">
										مقالات مرتبط
									</p>
									<div class="row w-100 m-0">
									@foreach($blogs as $relate)
										<div class="col-lg-12 col-sm-6 p-md-2 px-0 py-2">
											<a href="" class="blogpopular d-flex">
												<div class="row w-100 m-0">
												<div class="col-3 align-self-center p-0">
								<img  class="w-100 border" @if(file_exists('assets/uploads/content/video/small/'.$relate->image)) src="{{asset('assets/uploads/content/video/small/'.$relate->image)}}" alt="{{@$relate->title}}" @else src="{{asset('assets/site/images/notfound.png')}}" @endif class="w-100" />
													</div>
													<div class="col-9 align-self-center ps-2 pe-3">
														<p class="h6 fw-bolder text-first text-dark my-1">
														{{@$relate->title}}
														</p>
														<p
															class="h6 fw-bolder text-first text-secondary my-1">
															<small>بازدید{{@$relate->view }}</small>
														</p>
													</div>
													
												</div>
											</a>
										</div>
										@endforeach
								</div>
								</div>
							</div>
						
							
						
						</div>
					</div>
			
			</div>
		</div>



@endsection
