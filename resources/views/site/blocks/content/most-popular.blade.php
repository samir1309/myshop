<section id="demos">
	<div class="row">
		<div class="large-12 px-1 columns">
			<div class="owl-carousel-most owl-theme my-0">
                @foreach($most_products as $most)
                 
                    @if($most->stocks > 0)
    				<div class="item p-0">
    					@include('layouts.site.blocks.product-box',['item' => $most])
    				</div>
                    @endif
                @endforeach
			</div>
		</div>
	</div>
</section>
