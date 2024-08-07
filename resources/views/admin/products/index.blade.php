@extends('layouts.admin.master')
@section('title','   محصولات')
@section('content')
	<!-- Top bar START -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border ">

		<!-- Title -->
		<div class="row mb-3">
			<div class="col-12 d-sm-flex justify-content-between align-items-center">
				<h1 class="h3 mb-2 mb-sm-0 fs-5">لیست    محصولات<span class="badge bg-orange bg-opacity-10 text-orange">245</span></h1>
				<a href="{{url('admin/products/add')}}" class="btn btn-sm btn-primary mb-0">افزودن  محصول</a>
			</div>
		</div>

		<!-- Card START -->
		<div class="card bg-transparent border">

			<!-- Card header START -->
			<div class="card-header bg-light border-bottom">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">

					<!-- Search bar -->
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control bg-body" type="search" placeholder="جستجوی  محصول" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>

					<!-- Select option -->
					<div class="col-md-3">
						<!-- Short by filter -->
						<form>
							<select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
								<option value="">مرتب سازی</option>
								<option>جدیدترین</option>
								<option>قدیمی ترین</option>
								<option>تایید</option>
								<option>رد شده</option>
							</select>
						</form>
					</div>
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body">
				<!-- Course table START -->
				<div class="table-responsive border-0 rounded-3">
					<!-- Table START -->
					<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
						<!-- Table head -->
						<thead>
							<tr>
								<th scope="col" class="border-0 rounded-start">عنوان</th>
								<th scope="col" class="border-0">دسته</th>
								<th scope="col" class="border-0">وضعیت</th>
								<th scope="col" class="border-0 rounded-end">عملیات</th>
							</tr>
						</thead>

						<!-- Table body START -->
						<tbody>
						@foreach($products as $key=> $cat)
							<!-- Table row -->
							<tr>
								<!-- Table data -->
								<td>
									<div class="d-flex align-items-center position-relative">
										<!-- Image -->
										<div class="w-60px">
											<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->

										<h6 class="table-responsive-title mb-0 ms-2">	
											<a href="#" class="stretched-link">{{@$cat['title']}} </a>
										</h6>
									</div>
								</td>


								<!-- Table data -->
								<td>
								<h6 class="mb-0 fw-light">

									@if(@$cat['parent_id']
									!== null){{@$parent['title']}}@else دسته
									اصلی @endif 
								</h6>
								</td>

								<!-- Table data -->
								<td> 
								{{@$cat['status'] == 1 ? 'نمایش در صفحه' : 'عدم نمایش در صفحه'}}

								</td>

								<!-- Table data -->
								<td>
								<a href="{{ route('admin.products.edit', $cat->id) }}" class="btn btn-sm btn-success me-1 mb-1 mb-md-0">ویرایش</a>
								<a href="{{ route('admin.products.video.index', $cat->id) }}" class="btn btn-sm btn-success me-1 mb-1 mb-md-0">جلسات دوره </a>

									<a href=""  type="button" onclick="return confirm('آیا از حذف اطلاعات مطمئن هستید؟');"
                                                                   class="btn btn-space btn-danger"
                                                                   data-toggle="tooltip" title="حذف">
                                                                    <i class="fa fa-trash">
								</td>
							</tr>
							@endforeach
						</tbody>
						<!-- Table body END -->
					</table>
					<!-- Table END -->
				</div>
				<!-- Course table END -->
			</div>
			<!-- Card body END -->
			<p dir="RTL"><strong>داستان میشه<a href="/s/fpnac/305" target="_blank">، اینجا میتونید مجانی بخونید و سفارش بدید&nbsp;</a></strong></p>
		
				<!-- Pagination END -->
			</div>
			<!-- Card footer END -->
		</div>
		<!-- Card END -->
	</div>
	<!-- Page main content END -->

@stop
