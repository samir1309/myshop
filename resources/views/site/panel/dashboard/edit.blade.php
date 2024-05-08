

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
				<!-- Edit profile START -->
				<div class="card bg-transparent border rounded-3">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="card-header-title mb-0 ff-vb fs-5">ویرایش پروفایل</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
					<form class="row g-4" method="post" action="{{route('panel.edit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
							<!-- Profile picture -->
						
							<!-- Full name -->
							<div class="col-12">
								<label class="form-label">نام و نام خانوادگی"</label>
								<div class="input-group">
									<input type="text"  name="name"  class="form-control" value="{{@$user->name}}" placeholder="نام و نام خانوادگی">
								</div>
							</div>

							<!-- Email id -->
							<div class="col-md-6">
								<label class="form-label">ایمیل</label>
								<input class="form-control"   name="email"  type="email" value="{{@$user->email}}"  placeholder="ایمیل">
							</div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">شماره تماس</label>
								<input type="text"   name="mobile"  class="form-control" value="{{@$user->mobile}}" placeholder="شماره تماس">
							</div>

							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="submit" class="btn btn-primary mb-0">ذخیره</button>
							</div>
					</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Edit profile END -->
				
				<div class="row g-4 mt-3">
					<!-- Password change START -->
					<div class="col-lg-6">
						<div class="card border bg-transparent rounded-3">
							<!-- Card header -->
							<div class="card-header bg-transparent border-bottom">
								<h5 class="card-header-title mb-0">تغییر رمز عبور</h5>
							</div>
							<!-- Card body START -->
                        <form action="{{ route('panel.updatepassword') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                            
							<div class="card-body">
								<!-- Current password -->
								<div class="mb-3">
									<label class="form-label">رمز فعلی</label>
									<input class="form-control" type="password" name="current_password"  value="temp_password" placeholder="********">
								</div> 
								<!-- New password-->
								<div class="mb-3">
									<label class="form-label"> رمز جدید</label>
									<div class="input-group">
										<input class="form-control" type="password" value="" name="password" placeholder="********">
										<span class="input-group-text p-0 bg-transparent">
											<i class="far fa-eye cursor-pointer p-2 w-40px"></i>
										</span>
									</div>
									<div class="rounded mt-1" id="psw-strength"></div>
								</div>
								<!-- Confirm password -->
								<div>
									<label class="form-label">تایید رمز جدید</label>
									<input class="form-control" type="password" name="re-password" value="" placeholder="********">
								</div>
								<!-- Button -->
								<div class="d-flex justify-content-end mt-4">
									<button type="submit" class="btn btn-primary mb-0">تغییر رمز</button>
								</div>
							</div>
							<!-- Card body END -->
                     </form>


                     
						</div>
					</div>
					<!-- Password change end -->
				</div>
			</div>
			<!-- Main content END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->
@stop