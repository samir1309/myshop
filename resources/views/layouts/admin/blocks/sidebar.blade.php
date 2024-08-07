<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

	<!-- Navbar brand for xl START -->
	<div class="d-flex align-items-center">
		<a class="navbar-brand" href="index.html">
			<img class="navbar-brand-item" src="assets/images/logo-light.svg" alt="">
		</a>
	</div>
	<!-- Navbar brand for xl END -->
	
	<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
		<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

			<!-- Sidebar menu START -->
			<ul class="navbar-nav flex-column" id="navbar-sidebar">
				
				<!-- Menu item 1 -->
				<li class="nav-item"><a href="admin-dashboard.html" class="nav-link active"><i class="bi bi-house fa-fw me-2"></i>داشبورد</a></li>
				
				<!-- Title -->
				<li class="nav-item ms-2 my-2">صفحات</li>
					<!-- menu item 2 -->
					<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button" aria-expanded="false" aria-controls="collapsepage">
						<i class="bi bi-basket fa-fw me-2"></i>دوره ها 
					</a>
					<!-- Submenu -->
					<ul class="nav collapse flex-column" id="collapsepage" data-bs-parent="#navbar-sidebar">
					<li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.index') }}">دسته بندی  دوره</a></li>
						<li class="nav-item"> <a class="nav-link" href="{{ URL::action('Admin\ProductController@getProduct') }}">دوره های آموزشی</a></li>
						<li class="nav-item"> <a class="nav-link" href="admin-course-detail.html">جزئیات</a></li>
					</ul>
				</li>

							<!-- Menu item 4 -->
							<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button" aria-expanded="false" aria-controls="collapseinstructors">
						<i class="fas fa-user-tie fa-fw me-2"></i>محتوا
					</a>
					<!-- Submenu -->
					<ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
						
									<li class="nav-item">
                                        <a class="nav-link"
                                           href="{{URL::action('Admin\ArticleController@getArticleCat')}}">
                                            دسته بندی مقالات</a>
                                    </li>	
									<li class="nav-item">
									<a class="nav-link"
										href="{{URL::action('Admin\ArticleController@getArticle')}}">
										مقالات</a>
								</li>				
									<li class="nav-item">
									<a class="nav-link"
										href="{{URL::action('Admin\SliderController@getSlider')}}">اسلایدر</a>
								</li>					
								<li class="nav-item">
                                            <a class="nav-link"
                                               href="{{URL::action('Admin\SliderController@getMobile')}}">بنر موبایل</a>
                                        </li>
									
									</ul>

									
				</li>
				<!-- menu item 2 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#collapsepages" role="button" aria-expanded="false" aria-controls="collapsepages">
						<i class="bi bi-basket fa-fw me-2"></i>مقالات
					</a>
					<!-- Submenu -->
					<ul class="nav collapse flex-column" id="collapsepages" data-bs-parent="#navbar-sidebar">
						<li class="nav-item"> <a class="nav-link" href="{{URL::action('Admin\BlogCategoryController@getArticleCat')}}">دسته بندی مقالات</a></li>
						<li class="nav-item"> <a class="nav-link" href="{{URL::action('Admin\BlogController@getArticle')}}">مقالات</a></li>
					</ul>
				</li>
<!--  -->

<!-- Menu item 8 -->
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentications" role="button" aria-expanded="false" aria-controls="collapseauthentications">
	<i class="bi bi-lock fa-fw me-2"></i>سطح دسترسی
</a>
<!-- Submenu -->
<ul class="nav collapse flex-column" id="collapseauthentications" data-bs-parent="#navbar-sidebar">
	<li class="nav-item"> <a class="nav-link"
	href="{{URL::action('Admin\UserController@getGroup')}}"> مدیریت سطح دسترسی</li>

			<li class="nav-item">
				<a class="nav-link"
					href="{{URL::action('Admin\UserController@getIndex')}}">
					مدیریت مدیران
				</a>
			</li>
</ul>
</li>
<li class="nav-item">
					<a class="nav-link" data-bs-toggle="collapse" href="#collapseseo" role="button" aria-expanded="false" aria-controls="collapseauthentications">
						<i class="bi bi-lock fa-fw me-2"></i>سئو
					</a>
					<!-- Submenu -->
					<ul class="nav collapse flex-column" id="collapseseo" data-bs-parent="#navbar-sidebar">
						<li class="nav-item"> <a class="nav-link"
						href="{{ route('admin.redirect.index' ) }}"> ریدایرکت</li>
				
								<li class="nav-item">
									<a class="nav-link"
										href="{{ route('admin.uploader.index' ) }}">
										آپلودر
									</a>
								</li>
					</ul>
				</li>

				
				<!-- Menu item 5 -->
				<li class="nav-item"> <a class="nav-link" href="admin-review.html"><i class="far fa-comment-dots fa-fw me-2"></i>دیدگاه ها</a></li>

				<!-- Menu item 6 -->
				<li class="nav-item"> <a class="nav-link" href="admin-earning.html"><i class="far fa-chart-bar fa-fw me-2"></i>درآمدها</a></li>

				<!-- Menu item 7 -->
				<li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting.edits' ) }}"><i class="fas fa-user-cog fa-fw me-2"></i>تنظیمات</a></li>
				<li class="nav-item"> <a class="nav-link" href="{{ route('admin.social.index' ) }}"><i class="fas fa-user-cog fa-fw me-2"></i>شبکه های اجتماعی</a></li>

				
			
			<div class="px-3 mt-auto pt-3">
				<div class="d-flex align-items-center justify-content-between text-primary-hover">
						<a class="h5 mb-0 text-body" href="" data-bs-toggle="tooltip" data-bs-placement="top" title="تنظیمات">
							<i class="bi bi-gear-fill"></i>
						</a>
						
						<a class="h5 mb-0 text-body" href="index.html" data-bs-toggle="tooltip" data-bs-placement="top" title="صفحه اصلی">
							<i class="bi bi-globe"></i>
						</a>
						<a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" title="خروج">
							<i class="bi bi-power"></i>
						</a>
				</div>
			</div>
			<!-- Sidebar footer END -->
			
		</div>
	</div>
</nav>
<!-- Sidebar END -->
