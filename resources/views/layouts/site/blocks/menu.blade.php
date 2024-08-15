
<header class="navbar-light navbar-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="{{route('site.home')}}">
				<img class="light-mode-item navbar-brand-item" src="{{asset('assets/uploads/content/set/'. $setting->logo)}}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{asset('assets/uploads/content/set/'. $setting->logo)}}" alt="logo">
			</a>
			
					<!-- Category menu START -->
			<ul class="navbar-nav navbar-nav-scroll dropdown-clickable">
				<li class="nav-item dropdown dropdown-menu-shadow-stacked">
					<a class="nav-link" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="bi bi-grid-3x3-gap-fill me-3 fs-5 me-xl-1 d-xl-none"></i>
						<i class="bi bi-grid-3x3-gap-fill me-1 d-none d-xl-inline-block"></i>
						<span class="d-none d-xl-inline-block">دسته بندی</span>
					</a>
	
					<ul class="dropdown-menu z-index-unset" aria-labelledby="categoryMenu">
	
						<!-- Dropdown submenu -->
						@foreach($category_footer as $key=>$main)
						<li> <a class="dropdown-item" href="{{ route('site.product.category' , $main->url ) }}">{{@$main->title}}</a></li>
							@endforeach

							<li> <a class="dropdown-item" href="{{ route('site.blog.listcat') }}">مقالات</a></li>
						</ul>
					</li>
					</ul>
				</li>
			</ul>
				<div class="navbar-collapse collapse" id="navbarCollapse">
				<!-- Nav Search START -->
				<div class="col-xl-8">
					<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
						<div class="nav-item w-100">
							<form class="rounded position-relative">
								<input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="جستجو..." aria-label="Search">
								<button class="btn btn-link bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
									type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		
			@if(!\Auth::check())
			<!-- Signout button  -->
			<div class="navbar-nav d-none d-lg-inline-block">
			<a href="{{route ('panel.login')}}">

				<button class="btn btn-sm btn-dark mb-0"><i class="fas fa-sign-in-alt me-2"></i>ورود</button>
			</a>
			</div>
			@else
		<div class=" me-3">
			<div class="" style="position: relative;">

				<a href="{{route ('panel.dashboard')}}" class="btn btn-light btn-round mb-0">
								<i class="fas fa-user pt-2"></i>
				</a>
							</div>
			</div>
							<div class="" style="position: relative;">
							<a class="btn btn-light btn-round mb-0"
							href="{{ route('site.basket.index')}}" role="button" >
								<i class="bi bi-cart2 fs-4"></i>
							</a>
							<span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1">{{ @$totalCartItems}}
								<span class="visually-hidden">اقلام</span></div>
							</span>
							@endif
</div>


			

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>