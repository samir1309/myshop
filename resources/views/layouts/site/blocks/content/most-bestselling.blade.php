<section id="demos">
	<div class="row">
		<div class="large-12 px-1 columns">
			<div class="owl-carousel-most owl-theme my-0">
                @foreach($popular_products as $popular)
				<div class="item p-0">
                    @if($popular->stocks > 0)
                        <div class="item p-0">
                            @include('layouts.site.blocks.product-box',['item' => $popular])

                        </div>
                    @endif

				</div>
                @endforeach
			</div>
		</div>
	</div>
</section>
