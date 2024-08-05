
<!-- Header START -->
<header class="navbar-light navbar-sticky navbar-transparent">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{ asset('assets/uploads/content/set/' . $setting->logo) }}" alt="{{$setting->title}}">
				<img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/uploads/content/set/' . $setting->logo) }}" alt="{{$setting->title}}">
			</a>
			<!-- Logo END -->
	
			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
				<span class="me-2"><i class="fas fa-search fs-5"></i></span>
			</button>
	
			<!-- Category menu START -->
			<ul class="navbar-nav navbar-nav-scroll dropdown-clickable">
				<li class="nav-item dropdown dropdown-menu-shadow-stacked">
					<a class="nav-link" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="bi bi-grid-3x3-gap-fill me-3 fs-5 me-xl-1 d-xl-none"></i>
						<i class="bi bi-grid-3x3-gap-fill me-1 d-none d-xl-inline-block"></i>
						<span class="d-none d-xl-inline-block">دسته بندی</span>
					</a>
	
					<ul class="dropdown-menu z-index-unset" aria-labelledby="categoryMenu">
					@foreach($category_footer as $key=>$main)
				<li >
				
						
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
						@foreach($main->childs as $childRow)
							<li> <a class="dropdown-item" href="{{ route('site.product.list',['id'=>$childRow->id]) }}"> {{@$childRow->title}} </a></li>
							@endforeach
						</ul>
					</li>

					<li ><a class="dropdown-item" href="{{ route('site.product.category',@$main->url ) }}">{{@$main->title}}</a></li>
					@endforeach
					<li ><a class="dropdown-item" href="{{route('site.blog.listcat' )}}"> مقالات </a></li>
					<li ><a class="dropdown-item" href="{{route('site.contact')}}">تماس با ما </a></li>


					
						</ul>


				</li>
			</ul>
			<!-- Category menu END -->
	
			<!-- Main navbar START -->
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
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->
	
			<!-- Right header content START -->
			<!-- Add to cart -->
			<div class="navbar-nav position-relative overflow-visible me-3">
				<a href="#" class="nav-link">	<i class="fas fa-shopping-cart fs-5"></i></a>
				<span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success mt-xl-2 ms-n1">5 
					<span class="visually-hidden">اقلام</span>
				</span>
			</div>
	
	
			<!-- Signout button  -->
			<div class="navbar-nav d-none d-lg-inline-block">
				<button class="btn btn-danger-soft mb-0"><i class="fas fa-sign-in-alt me-2"></i>ثبت نام</button>
			</div>
			<!-- Right header content END -->
		
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->