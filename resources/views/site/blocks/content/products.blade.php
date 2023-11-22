<div class="end">
	<div class="p-2 px-xs-0 px-sm-1 pros prod">
		<!-- <div class="bartitle max-content mx-auto position-relative">
			<img src="{{asset('assets/site/images/kaj/end-title.png')}}" alt="" class="end">
			<h2 class="fw-bolder">
				جدیدترین های کاج شاپ
			</h2>
			<img src="{{asset('assets/site/images/kaj/start-title.png')}}" alt="" class="start">
		</div> -->
		<div class="d-md-none d-sm-block d-xs-block">
			<div class="d-flex align-items-center justify-content-between px-3 pb-2">
				<a href="{{route('site.latest')}}" class="ismb text-dark">
					جدیدترین ها
				</a>
				<a href="{{route('site.latest')}}" class="d-flex align-items-center text-dark">
					مشاهده بیشتر
					<i class="bi bi-arrow-left d-flex ms-2"></i>
				</a>
			</div>
		</div>
		<div class="d-md-block d-sm-none d-xs-none">
			<div class="newline position-relative">
				<hr>
				<p class="h5 m-auto px-3 position-absolute top-0 bottom-0 end-0 start-0">
					<a href="{{route('site.latest')}}">
						جدیدترین ها
					</a>
				</p>
				<p class="h5 my-0 ms-auto px-3 position-absolute top-0 bottom-0 end-25">
					<a href="{{route('site.latest')}}" class="d-flex align-items-center">
						مشاهده بیشتر
				
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi ms-2 bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>
					</a>
				</p>
			</div>
		</div>
			<div class="products-home p-3 p-xs-1">
			<section id="demos">
				<div class="row">
					<div class="large-12 px-1 columns">
						<div class="owl-carousel owl-theme my-0">
							@foreach($new_products as $new)


							<div class="item">
								@include('layouts.site.blocks.product-box',['item' => $new])
							</div>
                                


							@endforeach
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="over d-md-block d-sm-none d-xs-none"></div>
	</div>
</div>
