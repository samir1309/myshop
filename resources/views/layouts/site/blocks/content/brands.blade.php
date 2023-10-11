<div class="brands-home p-2 px-xs-0">
	<div class="p-2 p-xs-0">
	    <div class="px-2">
            <div class="barnew position-relative">
                <hr>
                <p class="h6 text-center m-auto px-3 position-absolute top-0 bottom-0 end-0 start-0">
ما را در اینستاگرام دنبال کنید.                 </p>
            </div>
        </div>
		<section id="demos">
			<div class="row">
				<div class="large-12 columns">
					<div class="owl-carousel-brand owl-theme my-0">
						@foreach($brands as $brand)
						<div class="item">
							<a href="{{$brand->title}}">
 <img srcset="{{asset('assets/uploads/content/sloagen/'.@$brand['image'])}} 2x, {{asset('assets/uploads/content/sloagen/'.@$brand['image'])}} 1x" src="{{asset('assets/uploads/content/sloagen/'.@$brand['image'])}}"
                                             alt="{!! @$brand['title'] !!}" class="w-100">							</a>
							
						
                                             
                                             
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</div>
</div>