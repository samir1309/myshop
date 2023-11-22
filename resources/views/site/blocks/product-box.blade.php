<div class="card card-pro">
	<div class="overlay-top">
	    @php $pro_image = $item->pro_image; @endphp
		{{--<ul class="p-0 m-0">
			<li class="float-start list-unstyled">
				 Dislike 👎
				<button v-if="like{{$item->id}} == 0" class="btn" @click="getLike{{$item->id}}(1,{{$item->id}})">
					<i class="bi bi-heart"></i>
				</button>
				<button v-else class="btn" @click="getLike{{$item->id}}(0,{{$item->id}})">
					<i class="bi bi-heart-fill text-danger"></i>
				</button>
			</li>
		</ul>--}}
		@php $calcute_list = $item->calcute_list; @endphp
		@if($item->stocks != 0)
		@if($calcute_list > 0 && $item->price != 0)
		<div class="sp-discount">
			<p class="m-0">
				تخفیف ویژه
			</p>
		</div>
		@endif
		@endif
		<!--<button class="sp-discount">-->
  <!--  		<i class="bi bi-cart3"></i>-->
  <!--  	</button>-->
	</div>
	<a href="{{route('site.product.detail',['id'=>$item->id])}}">
		<div class="bxs">
			<figure class="w-100 mx-0 my-2">
				<div class="figure-inn">
					<img srcset="{!! $pro_image !!} 2x, {!! $pro_image !!} 1x" loading="lazy" src="{!! $pro_image !!}" alt="{{@$item->title}}" class="swiper-lazy" width="100" height="100">
				</div>
			</figure>
			<p class="text-dark h4">
				{{@$item->title}}
			</p>
            <div class="color d-flex justify-content-center align-items-center" style="height:1.25rem;">
                @foreach($item->dot as $color)
                    <span class="rounded-circle m-1" style="background-color:{{@$color->color}};width:0.75rem;height:0.75rem;"></span>
                @endforeach
            </div>
			{{--<div class="color d-flex justify-content-center align-items-center" style="height:1.25rem;">
			    <span class="rounded-circle m-1" style="background-color:red;width:1rem;height:1rem;border:3px solid #f4b19f"></span>
			    <span class="rounded-circle m-1" style="background-color:red;width:1rem;height:1rem;border:3px solid #f4b19f"></span>
			</div>--}}
			<div class="price">
		    	@if($item->stocks != 0)
				@if($calcute_list > 0 && $item->price != 0)
				<div class="old text-secondary">
					<del>
						{!! number_format($item->old_price) !!}
                        تومان
					</del>
				</div>
				<div class="off">
					<span class="badge bg-one text-dark fw-bolder">
						{{round($calcute_list)}}%
					</span>
				</div>
				@else
				<div class="d-flex" style="opacity:0">
					<div class="old text-secondary">
					    <del>
						{!! number_format($item->old_price) !!}
                        تومان
					    </del>
    				</div>
    				<div class="off">
    					<span class="badge bg-one text-dark fw-bolder">
    						{{round($calcute_list)}}%
    					</span>
    				</div>
				</div>
				@endif
				@endif
			</div>
			@if($item->stocks == 0)
			<p class="prc fw-bolder">
				ناموجود
			</p>
			@else
			<p class="prc fw-bolder">
                @if($item->price == 0)
                ناموجود
                @else
            	@if($item->colors->count() > 0)
            	از
            	@endif
                {!! number_format(@$item->price) !!}
                تومان
                @endif
			</p>
			@endif
			<div class="colors d-flex align-items-center justify-content-center" style="height: 1.5rem;">
				@if($item->colors->count() > 0)
				@php
				$c=@$item->category[0]->specification_title;
				@endphp
				<p class="m-0">
					در {{$item->colors->count()}}
                    @if($item->specification_title != null)
                    {{$item->specification_title}}
                    @else
                    {{@$c}}
                    @endif
				</p>
				@endif
			</div>
		</div>
	</a>
</div>
