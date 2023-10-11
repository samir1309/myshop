<div class="modal fade cate-modal" id="catModal" tabindex="-1" aria-labelledby="catModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content bg-two">
			<div class="modal-header py-2 px-3">
				<p class="modal-title h5 fw-bolder text-one" id="catModalLabel">
					دسته بندی محصولات
				</p>
				<button type="button" class="btn px-0 d-flex align-items-center" data-bs-dismiss="modal" aria-label="Close">
				    برگشت 
				    <i class="bi bi-arrow-left ms-2 d-flex"></i>
				</button>
			</div>
			<div class="modal-body p-2">
				<div class="accordion" id="accordioncatsd">
					@foreach($category_footer as $key=>$main)
					<div class="accordion-item">
						<p class="accordion-header h2" id="headingOne{{$main->id}}">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$main->id}}" aria-expanded="false" aria-controls="collapseOne{{$main->id}}">
								{{@$main->title}}
							</button>
						</p>
						<div id="collapseOne{{$main->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne{{$main->id}}" data-bs-parent="#accordioncatsd">
							<div class="accordion-body">
								<hr class="mt-0 mb-2">
								<ul class="p-0 m-0">
									<li class="list-unstyled text-one d-flex align-items-center">
										<i class="bi bi-caret-left-fill me-1 d-flex"></i>
										<a href="{{route('site.product.list',['id'=>$main->id])}}"
											class="cate-link-pr fw-bolder">
											{{@$main->title}}
										</a>
									</li>
									<hr class="mt-0 mb-2">
									@foreach($main->childs as $key=>$child)
									<li class="list-unstyled text-one d-flex align-items-center">
										<i class="bi bi-caret-left-fill me-1 d-flex"></i>
										<a href="{{route('site.product.list',['id'=>$child->id])}}"
											class="cate-link-pr fw-bolder">
											{{@$child->title}}
										</a>
									</li>
									<hr class="mt-0 mb-2">
									@foreach($child->childs as $item=>$cat)
									<li class="list-unstyled text-one d-flex align-items-center">
										<i class="bi bi-caret-left me-1 d-flex"></i>
										<a href="{{route('site.product.list',['id'=>$cat->id])}}"
											class="cate-link-pr text-secondary">
											{{@$cat->title}}
										</a>
									</li>
									@endforeach
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>