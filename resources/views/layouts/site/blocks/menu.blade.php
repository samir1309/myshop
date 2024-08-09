
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
						</ul>
					</li>
					</ul>
				</li>
			</ul>

			<div class="navbar-nav position-relative overflow-visible me-3">
				<a href="{{ route('site.basket.index') }}" class="nav-link">	<i class="fas fa-shopping-cart fs-5"></i></a>
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success mt-xl-2 ms-n1">   {{ \App\Models\Basket::authUser()->count() }}  
					<span class="visually-hidden">اقلام</span>
				</span>
			</div>

		
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->

			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>