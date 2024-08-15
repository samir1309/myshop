@extends('layouts.site.master')
@section('content')


<section class="pt-3 pt-xl-5">
	<div class="container" data-sticky-container>
		<div class="row g-4">
			<!-- Main content START -->
			<div class="col-xl-8">

				<div class="row g-4">
					<!-- Title START -->
					<div class="col-12">
						<!-- Title -->
						<h2 class="fs-3"> {{$course->title}}</h2>
						<p>{!! $course->how_to_use !!}</p>				<!-- Content -->
						<!-- Content -->
						<ul class="list-inline mb-0">
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star me-2"></i>4.5/5.0</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate me-2"></i>12 شرکت کننده</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal me-2"></i>متوسطه</li>
							<li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-exclamation-fill me-2"></i>آخرین بروزرسانی 1401/02</li>
							<li class="list-inline-item fw-light h6"><i class="fas fa-globe me-2"></i>انگلیسی</li>
						</ul>
					</div>
					<!-- Title END -->

					<!-- Image and video -->
					<!-- <div class="col-12 position-relative">
						<div class="video-player rounded-3">
						{!! $course->video_link!!}
<style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style>  

						</div>
					</div> -->
				
    <div class="video-player rounded-3">  
        @if ($course->video_link)  
		<div class="video-player rounded-3">
						<!-- {!! $course->video_link!!} -->
<style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style>  

						</div>
        @else  
            <img src="{{ asset('assets/uploads/content/pro/big/'. $course->image )}}" class="img-fluid rounded-3" alt="{{ $course->title }}">  
        @endif  
    </div>  



					<!-- About course START -->
					<div class="col-12">
					<div class="col-lg-12">
				<div class="card shadow rounded-2 p-0">
					<!-- Tabs START -->
					<div class="card-header border-bottom px-4 py-3">
						<ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">توضیحات</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false">جلسات دوره</button>
							</li>
							<!-- Tab item -->
							<!-- <li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">مدرس</button>
							</li>
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button" role="tab" aria-controls="course-pills-4" aria-selected="false">دیدگاه</button>
							</li>
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-5" type="button" role="tab" aria-controls="course-pills-5" aria-selected="false">سوالات متداول</button>
							</li>
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-6" data-bs-toggle="pill" data-bs-target="#course-pills-6" type="button" role="tab" aria-controls="course-pills-6" aria-selected="false">پرسش و پاسخ</button>
							</li> -->
						</ul>
					</div>
					<!-- Tabs END -->

					<!-- Tab contents START -->
					<div class="card-body p-4">
						<div class="tab-content pt-2" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
								<!-- Course detail START -->
								<h5 class="mb-3">توضیحات این دوره</h5>
								<p class="mb-3">به مجموعه ی آموزشی <strong>
							آموزش تخصصی {{$course->title}} 
                            </strong> خوش آمدید.</p>
								<!-- <p class="mb-3">  {!! $course->description !!}</p>
								<button id="toggle-button">نمایش بیشتر</button> -->

							
								<div class="content">
    <p id="short-text">{!! $course->how_to_use !!}  </p>
	<p id="full-text" style="display: none;">{{ strip_tags($course->description) }}</p>	    <!-- <button id="toggle-button">نمایش بیشتر</button> -->
	<div class="text-center mt-5">
			<a href="#" id="toggle-button" class="btn btn-primary-soft mb-0">مشاهده همه<i class="fas fa-sync ms-2"></i></a>
		</div>
</div>



<script>
    document.getElementById('toggle-button').onclick = function() {
        var fullText = document.getElementById('full-text');
        if (fullText.style.display === 'none') {
            fullText.style.display = 'block';
            this.innerText = 'نمایش کمتر';
        } else {
            fullText.style.display = 'none';
            this.innerText = 'نمایش بیشتر';
        }
    }
</script>

								<!-- List content -->
								<!-- <h5 class="mt-4">بعد از یادگیری:</h5>
								<ul class="list-group list-group-borderless mb-3">
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>معرفی دوره دیجیتال مارکتینگ</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش کار به صورت متوسطه با فتوشاپ</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش طراحی رابط کاربری وب و اپلیکشن</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Facebook ADS</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش فوتومونتاژ</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ابزارهای بهینه سازی موتور جستجو</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش اجرای لوگو</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ساختار URL</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>طراحی بنر های دیجیتالی</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>نکات و ترفندهای سئو</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>توان کار با فتوشاپ</li>
								</ul> -->

								<!-- <p class="mb-0">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
							 -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
								<!-- Course accordion START -->
								<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
									<!-- Item -->

										<!-- Lecture item START -->
										<div class="col-12">
										<!-- Curriculum item -->
										@foreach($videos as $video)
										<div class="d-sm-flex justify-content-sm-between align-items-center">
											<div class="d-flex">
											<a href="#" class="btn btn-danger-soft btn-round mb-0 flex-shrink-0"><i class="fas fa-play"></i></a>												<div class="ms-2 ms-sm-3 mt-1 mt-sm-0">	
													<h6 class="mb-0 fw-normal">  {{ $video->title }}</h6>
													<p class="mb-2 mb-sm-0 small"> {{ $video->time }}</p>
												</div>
											</div>
											<!-- Button -->
											<a href="#" class="btn btn-light btn-round mb-0 flex-shrink-0"><i class="bi bi-lock-fill"></i></a>										</div>
										<hr>
										@endforeach
									</div>
									<!-- Lecture item END -->

								</div>
								<!-- Course accordion END -->
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
								<!-- Card START -->
								<div class="card mb-0 mb-md-4">
									<div class="row g-0 align-items-center">
										<div class="col-md-5">
											<!-- Image -->
											<img src="assets/images/instructor/01.jpg" class="img-fluid rounded-3" alt="instructor-image">
										</div>
										<div class="col-md-7">
											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h3 class="card-title mb-0 fs-5">مهدی ناصری</h3>
												<p class="mb-2"></p>
												<!-- Social button -->
												<ul class="list-inline mb-3">
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-twitter"><i class="fab fa-twitter-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-instagram"><i class="fab fa-instagram-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-facebook"><i class="fab fa-facebook-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-linkedin"><i class="fab fa-linkedin"></i></a>
													</li>
													<li class="list-inline-item">
														<a href="#" class="fs-5 text-youtube"><i class="fab fa-youtube-square"></i></a>
													</li>
												</ul>

												<!-- Info -->
												<ul class="list-inline">
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></span>
															<span class="h6 fw-light mb-0 ms-2">9.1k</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></span>
															<span class="h6 fw-light mb-0 ms-2">4.5</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle"><i class="fas fa-play"></i></span>
															<span class="h6 fw-light mb-0 ms-2">29 دوره آموزشی</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-info bg-opacity-10 text-info rounded-circle"><i class="fas fa-comment-dots"></i></span>
															<span class="h6 fw-light mb-0 ms-2">205</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Card END -->
								
								<!-- Instructor info -->
								<h5 class="mb-3">درباره مدرس</h5>
								<p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
								<p class="mb-3">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
								<!-- Email address -->
								<div class="col-12">
									<ul class="list-group list-group-borderless mb-0">
										<li class="list-group-item pb-0">ایمیل: <a href="#" class="ms-2">example@email.com</a></li>
										<li class="list-group-item pb-0">وب سایت: <a href="#" class="ms-2">https://example.com</a></li>
									</ul>
								</div>
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
								<!-- Review START -->
								<div class="row mb-4">
									<h5 class="mb-4">دیدگاه کاربران</h5>

									<!-- Rating info -->
									<div class="col-md-4 mb-3 mb-md-0">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
											</ul>
											<p class="mb-0">(بر اساس بررسی امروز)</p>
										</div>
									</div>

									<!-- Progress-bar and star -->
									<div class="col-md-8">
										<div class="row align-items-center">
											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Review END -->

								<!-- Student review START -->
								<div class="row">
									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">نیلوفر سجادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>
									</div>

									<!-- Comment children level 1 -->
									<div class="d-md-flex mb-4 ps-4 ps-md-5">
										<!-- Avatar -->
										<div class="avatar avatar-lg me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">مهرداد علیزاده</h5>
											</div>
											<!-- Info -->
											<p class="small mb-2">1 روز قبل</p>
											<p class="mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
										</div>
									</div>

									<!-- Divider -->
									<hr>
									<!-- Review item END -->

									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">علی مرادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio3"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio4"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>	
									</div>
									<!-- Review item END -->
									<!-- Divider -->
									<hr>
								</div>
								<!-- Student review END -->

								<!-- Leave Review START -->
								<div class="mt-2">
									<h5 class="mb-4">ثبت دیدگاه</h5>
									<form class="row g-3">
										<!-- Name -->
										<div class="col-md-6 bg-light-input">
											<input type="text" class="form-control" id="inputtext" placeholder="نام" aria-label="First name">
										</div>
										<!-- Email -->
										<div class="col-md-6 bg-light-input">
											<input type="email" class="form-control" placeholder="ایمیل" id="inputEmail4">
										</div>
										<!-- Rating -->
										<div class="col-12 bg-light-input">
											<select id="inputState2" class="form-select js-choice">
												<option selected="">★★★★★ (5/5)</option>
												<option>★★★★☆ (4/5)</option>
												<option>★★★☆☆ (3/5)</option>
												<option>★★☆☆☆ (2/5)</option>
												<option>★☆☆☆☆ (1/5)</option>
											</select>
										</div>
										<!-- Message -->
										<div class="col-12 bg-light-input">
											<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="دیدگاه خود را بنویسید" rows="3"></textarea>
										</div>
										<!-- Button -->
										<div class="col-12">
											<button type="submit" class="btn btn-primary mb-0">ثبت دیدگاه</button>
										</div>
									</form>
								</div>
								<!-- Leave Review END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
								<!-- Title -->
								<h5 class="mb-3">سوالات متداول</h5>
								<!-- Accordion START -->
								<div class="accordion accordion-flush" id="accordionExample">
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span class="text-secondary fw-bold me-3">01</span>  
												<span class="h6 mb-0">بازاریابی دیجیتال چگونه کار می کند؟</span> 
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. 
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="text-secondary fw-bold me-3">02</span>  
												<span class="h6 mb-0">SEO چیست؟</span> 
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
												<p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>	
												کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<span class="text-secondary fw-bold me-3">03</span>  
												<span class="h6 mb-0">چه کسانی باید در این دوره شرکت کنند؟</span> 
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی <strong>در شصت و سه درصد گذشته،</strong> حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. 
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<span class="text-secondary fw-bold me-3">04</span>  
												<span class="h6 mb-0">T&C برای این برنامه چیست؟</span> 
											</button>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFive">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<span class="text-secondary fw-bold me-3">05</span>  
												<span class="h6 mb-0">چه گواهی هایی برای این برنامه دریافت خواهم کرد؟</span> 
											</button>
										</h2>
										<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. 
											</div>
										</div>
									</div>
								</div>
								<!-- Accordion END -->
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-6" role="tabpanel" aria-labelledby="course-pills-tab-6">
								<!-- Review START -->
								<div class="row">
									<div class="col-12">
										<h5 class="mb-4">پرسش و پاسخ</h5>

										<!-- Comment box -->
										<div class="d-flex mb-4">
											<!-- Avatar -->
											<div class="avatar avatar-sm flex-shrink-0 me-2">
												<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt=""> </a>
											</div>

											<form class="w-100 d-flex">
												<textarea class="one form-control pe-4 bg-light" id="autoheighttextarea" rows="1" placeholder="افزودن پرسش ..."></textarea>
												<button class="btn btn-primary ms-2 mb-0" type="button">ارسال</button>
											</form>
										</div>

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3 mb-4">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex mb-3">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 fw-normal"> <a href="#!"> مهناز احمدی </a></h6>
																		<p class="mb-0">آیا این آموزش جامع است و می شود با آن سایت مدیریت یا فروشگاهی زد؟ (موارپلود تصویر و...)</p>
																	</div>
																	<small>5دقیقه</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> لایک (3)</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> پاسخ</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> مشاهده 5 پاسخ</a> </li>
															</ul>
														</div>
													</div>
													
													<!-- Comment item nested START -->
													<ul class="list-unstyled ms-4">
														<!-- Comment item START -->
														<li class="comment-item">
															<div class="d-flex">
																<!-- Avatar -->
																<div class="avatar avatar-xs flex-shrink-0">
																	<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
																</div>
																<!-- Comment by -->
																<div class="ms-2">
																	<div class="bg-light p-3 rounded">
																		<div class="d-flex justify-content-center">
																			<div class="me-2">
																				<h6 class="mb-1 fw-normal"> <a href="#"> زهرا مختاری </a> </h6>
																				<p class=" mb-0">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
																			</div>
																			<small>2دقیقه</small>
																		</div>
																	</div>
																	<!-- Comment react -->
																	<ul class="nav nav-divider py-2 small">
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> لایک (5)</a></li>
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> پاسخ</a>	</li>
																	</ul>
																</div>
															</div>
														</li>
														<!-- Comment item END -->
													</ul>
													<!-- Comment item nested END -->
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 fw-normal"> <a href="#!"> محمد علیزاده </a></h6>
																		<p class="mb-0">در vuejs این فایل ها در حالت عادی اجرا می شوند یا احتیاج به تنظیمات خاص دارد، اگر دارد در دوره آموزش دادید؟</p>
																	</div>
																	<small>5دقیقه</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> لایک</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> پاسخ</a> </li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

									</div>

								</div>
							</div>
							<!-- Content END -->

						</div>
					</div>
					<!-- Tab contents END -->
				</div>
			</div>
					</div>
					<!-- About course END -->

					<div class="card-body p-4">
						<div class="tab-content pt-2" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
								<!-- Course detail START -->
								<h5 class="mb-3">توضیحات این دوره</h5>
								<p class="mb-3">به مجموعه ی آموزشی <strong>
							آموزش تخصصی {{$course->title}} 
                            </strong> خوش آمدید.</p>
								<p class="mb-3">  {!! $course->description !!}</p>
								</ul> 

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
								<!-- Course accordion START -->
								<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
									<!-- Item -->

										<!-- Lecture item START -->
										<div class="col-12">
										<!-- Curriculum item -->
										@foreach($videos as $video)
										<div class="d-sm-flex justify-content-sm-between align-items-center">
											<div class="d-flex">
											<a href="#" class="btn btn-danger-soft btn-round mb-0 flex-shrink-0"><i class="fas fa-play"></i></a>												<div class="ms-2 ms-sm-3 mt-1 mt-sm-0">	
													<h6 class="mb-0 fw-normal">  {{ $video->title }}</h6>
													<p class="mb-2 mb-sm-0 small"> {{ $video->time }}</p>
												</div>
											</div>
											<!-- Button -->
											<a href="#" class="btn btn-light btn-round mb-0 flex-shrink-0"><i class="bi bi-lock-fill"></i></a>										</div>
										<hr>
										@endforeach
									</div>
									<!-- Lecture item END -->

								</div>
								<!-- Course accordion END -->
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
								<!-- Card START -->
								<div class="card mb-0 mb-md-4">
									<div class="row g-0 align-items-center">
										<div class="col-md-5">
											<!-- Image -->
											<img src="assets/images/instructor/01.jpg" class="img-fluid rounded-3" alt="instructor-image">
										</div>
										<div class="col-md-7">
											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h3 class="card-title mb-0 fs-5">مهدی ناصری</h3>
												<p class="mb-2"></p>
												<!-- Social button -->
												<ul class="list-inline mb-3">
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-twitter"><i class="fab fa-twitter-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-instagram"><i class="fab fa-instagram-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-facebook"><i class="fab fa-facebook-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-linkedin"><i class="fab fa-linkedin"></i></a>
													</li>
													<li class="list-inline-item">
														<a href="#" class="fs-5 text-youtube"><i class="fab fa-youtube-square"></i></a>
													</li>
												</ul>

												<!-- Info -->
												<ul class="list-inline">
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></span>
															<span class="h6 fw-light mb-0 ms-2">9.1k</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></span>
															<span class="h6 fw-light mb-0 ms-2">4.5</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle"><i class="fas fa-play"></i></span>
															<span class="h6 fw-light mb-0 ms-2">29 دوره آموزشی</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-info bg-opacity-10 text-info rounded-circle"><i class="fas fa-comment-dots"></i></span>
															<span class="h6 fw-light mb-0 ms-2">205</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Card END -->
								
								<!-- Instructor info -->
								<h5 class="mb-3">درباره مدرس</h5>
								<p class="mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
								<p class="mb-3">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
								<!-- Email address -->
								<div class="col-12">
									<ul class="list-group list-group-borderless mb-0">
										<li class="list-group-item pb-0">ایمیل: <a href="#" class="ms-2">example@email.com</a></li>
										<li class="list-group-item pb-0">وب سایت: <a href="#" class="ms-2">https://example.com</a></li>
									</ul>
								</div>
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
								<!-- Review START -->
								<div class="row mb-4">
									<h5 class="mb-4">دیدگاه کاربران</h5>

									<!-- Rating info -->
									<div class="col-md-4 mb-3 mb-md-0">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
											</ul>
											<p class="mb-0">(بر اساس بررسی امروز)</p>
										</div>
									</div>

									<!-- Progress-bar and star -->
									<div class="col-md-8">
										<div class="row align-items-center">
											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Review END -->

								<!-- Student review START -->
								<div class="row">
									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">نیلوفر سجادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>
									</div>

									<!-- Comment children level 1 -->
									<div class="d-md-flex mb-4 ps-4 ps-md-5">
										<!-- Avatar -->
										<div class="avatar avatar-lg me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">مهرداد علیزاده</h5>
											</div>
											<!-- Info -->
											<p class="small mb-2">1 روز قبل</p>
											<p class="mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
										</div>
									</div>

									<!-- Divider -->
									<hr>
									<!-- Review item END -->

									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">علی مرادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio3"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio4"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>	
									</div>
									<!-- Review item END -->
									<!-- Divider -->
									<hr>
								</div>
								<!-- Student review END -->

								<!-- Leave Review START -->
								<div class="mt-2">
									<h5 class="mb-4">ثبت دیدگاه</h5>
									<form class="row g-3">
										<!-- Name -->
										<div class="col-md-6 bg-light-input">
											<input type="text" class="form-control" id="inputtext" placeholder="نام" aria-label="First name">
										</div>
										<!-- Email -->
										<div class="col-md-6 bg-light-input">
											<input type="email" class="form-control" placeholder="ایمیل" id="inputEmail4">
										</div>
										<!-- Rating -->
										<div class="col-12 bg-light-input">
											<select id="inputState2" class="form-select js-choice">
												<option selected="">★★★★★ (5/5)</option>
												<option>★★★★☆ (4/5)</option>
												<option>★★★☆☆ (3/5)</option>
												<option>★★☆☆☆ (2/5)</option>
												<option>★☆☆☆☆ (1/5)</option>
											</select>
										</div>
										<!-- Message -->
										<div class="col-12 bg-light-input">
											<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="دیدگاه خود را بنویسید" rows="3"></textarea>
										</div>
										<!-- Button -->
										<div class="col-12">
											<button type="submit" class="btn btn-primary mb-0">ثبت دیدگاه</button>
										</div>
									</form>
								</div>
								<!-- Leave Review END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
								<!-- Title -->
								<h5 class="mb-3">سوالات متداول</h5>
								<!-- Accordion START -->
								<div class="accordion accordion-flush" id="accordionExample">
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span class="text-secondary fw-bold me-3">01</span>  
												<span class="h6 mb-0">بازاریابی دیجیتال چگونه کار می کند؟</span> 
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. 
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="text-secondary fw-bold me-3">02</span>  
												<span class="h6 mb-0">SEO چیست؟</span> 
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
												<p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>	
												کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<span class="text-secondary fw-bold me-3">03</span>  
												<span class="h6 mb-0">چه کسانی باید در این دوره شرکت کنند؟</span> 
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی <strong>در شصت و سه درصد گذشته،</strong> حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. 
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<span class="text-secondary fw-bold me-3">04</span>  
												<span class="h6 mb-0">T&C برای این برنامه چیست؟</span> 
											</button>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFive">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<span class="text-secondary fw-bold me-3">05</span>  
												<span class="h6 mb-0">چه گواهی هایی برای این برنامه دریافت خواهم کرد؟</span> 
											</button>
										</h2>
										<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. 
											</div>
										</div>
									</div>
								</div>
								<!-- Accordion END -->
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-6" role="tabpanel" aria-labelledby="course-pills-tab-6">
								<!-- Review START -->
								<div class="row">
									<div class="col-12">
										<h5 class="mb-4">پرسش و پاسخ</h5>

										<!-- Comment box -->
										<div class="d-flex mb-4">
											<!-- Avatar -->
											<div class="avatar avatar-sm flex-shrink-0 me-2">
												<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt=""> </a>
											</div>

											<form class="w-100 d-flex">
												<textarea class="one form-control pe-4 bg-light" id="autoheighttextarea" rows="1" placeholder="افزودن پرسش ..."></textarea>
												<button class="btn btn-primary ms-2 mb-0" type="button">ارسال</button>
											</form>
										</div>

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3 mb-4">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex mb-3">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 fw-normal"> <a href="#!"> مهناز احمدی </a></h6>
																		<p class="mb-0">آیا این آموزش جامع است و می شود با آن سایت مدیریت یا فروشگاهی زد؟ (موارپلود تصویر و...)</p>
																	</div>
																	<small>5دقیقه</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> لایک (3)</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> پاسخ</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> مشاهده 5 پاسخ</a> </li>
															</ul>
														</div>
													</div>
													
													<!-- Comment item nested START -->
													<ul class="list-unstyled ms-4">
														<!-- Comment item START -->
														<li class="comment-item">
															<div class="d-flex">
																<!-- Avatar -->
																<div class="avatar avatar-xs flex-shrink-0">
																	<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
																</div>
																<!-- Comment by -->
																<div class="ms-2">
																	<div class="bg-light p-3 rounded">
																		<div class="d-flex justify-content-center">
																			<div class="me-2">
																				<h6 class="mb-1 fw-normal"> <a href="#"> زهرا مختاری </a> </h6>
																				<p class=" mb-0">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
																			</div>
																			<small>2دقیقه</small>
																		</div>
																	</div>
																	<!-- Comment react -->
																	<ul class="nav nav-divider py-2 small">
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> لایک (5)</a></li>
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> پاسخ</a>	</li>
																	</ul>
																</div>
															</div>
														</li>
														<!-- Comment item END -->
													</ul>
													<!-- Comment item nested END -->
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 fw-normal"> <a href="#!"> محمد علیزاده </a></h6>
																		<p class="mb-0">در vuejs این فایل ها در حالت عادی اجرا می شوند یا احتیاج به تنظیمات خاص دارد، اگر دارد در دوره آموزش دادید؟</p>
																	</div>
																	<small>5دقیقه</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> لایک</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> پاسخ</a> </li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

									</div>

								</div>
							</div>
							<!-- Content END -->

						</div>
					</div>
					<!-- FAQs END -->
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-xl-4">
				<div data-sticky data-margin-top="80" data-sticky-for="768">
					<div class="row g-4">
						<div class="col-md-6 col-xl-12">
							<!-- Course info START -->
							<div class="card card-body border p-4">
								<!-- Price and share button -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Price -->
									<h3 class="fw-bold mb-0 me-2 fs-5"> {{ $course->formatPrice($course->price) }} تومان</h3>
									<!-- Share button with dropdown -->
									<div class="dropdown">
										<a href="#" class="btn btn-sm btn-light rounded mb-0 small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fas fa-fw fa-share-alt"></i>
										</a>
										<!-- <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
											<li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
											<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>کپی لینک</a></li>
										</ul> -->
									</div>
								</div>
									
								<!-- Buttons -->
								<div class="mt-3 d-grid">

								<form method="POST" action="{{ route('site.basket.add', $course->id) }}">  
									@csrf  
									<button type="submit" class="btn btn-outline-primary w-100">سبد خرید</button>  
								</form>  


									<a href="#" class="btn btn-success">خرید آنلاین</a>
								</div>
								<!-- Divider -->
								<hr>

								<!-- Title -->
								<h5 class="mb-3 fs-5">مشخصات دوره</h5>
							<ul class="list-group list-group-borderless">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>تعداد ویدیو ها</span>
									<span>30</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>مدت زمان دوره</span>
									<span>4ساعت</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>سطح دوره</span>
									<span>متوسطه</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>زبان</span>
									<span>انگلیسی</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>تاریخ بروزرسانی</span>
									<span>30 تیر 1400</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>مدرک</span>
									<span>دارد</span>
									</li>
								</ul>
								<!-- Divider -->
								<hr>

								<!-- Instructor info -->
								<div class="d-sm-flex align-items-center">
									<!-- Avatar image -->
									<div class="avatar avatar-xl">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
									</div>
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h5 class="mb-0"><a href="#">لیندا محمدی</a></h5>
										<p class="mb-0 small">مدرس طراحی وب</p>
									</div>
								</div>

								<!-- Rating and follow -->
								<div class="d-sm-flex justify-content-sm-between align-items-center mt-0 mt-sm-2">
									<!-- Rating star -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
										<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
									</ul>

									<!-- button -->
									<button class="btn btn-sm btn-primary mb-0 mt-2 mt-sm-0">دنبال کردن</button>
								</div>
							</div>
							<!-- Course info END -->
						</div>

						<!-- Tags START -->
						<div class="col-md-6 col-xl-12">
							<div class="card card-body border p-4">
								<h4 class="mb-3 fs-5">برچسب ها</h4>
							<ul class="list-inline mb-0">
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">PHP</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">استارت آپ</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">HTML</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">bootstrap</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">بانک اطلاعات</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">طراحی وب</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">برنامه نویسی</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">داده کاوی</a> </li>
								</ul>
							</div>	
						</div>
						<!-- Tags END -->
					</div><!-- Row End -->
				</div>	
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
@stop