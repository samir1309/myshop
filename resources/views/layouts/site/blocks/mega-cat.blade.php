<div class="p-0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills col-xxl-2 col-xl-2 col-lg-3 col-md-4 border-end" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach($category_footer as $key=>$main)
            <button class="nav-link text-dark rounded-0 @if($key==0) active @endif" id="v-pills-home-tab{{$main->id}}" data-bs-toggle="pill" data-bs-target="#v-pills-home{{$main->id}}" type="button" role="tab" aria-controls="v-pills-home{{$main->id}}" aria-selected="true">
                <i class="bi bi-arrow-left-short d-flex me-2"></i>
                {{@$main->title}}
            </button>
            @endforeach
        </div>
        <div class="tab-content col-xxl-10 col-xl-9 col-lg-9 col-md-8 border-start" id="v-pills-tabContent">
            @foreach($category_footer as $key=>$main)
            <div class="tab-pane fade show @if($key==0) active @endif" id="v-pills-home{{$main->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab{{$main->id}}">
                <div class="p-2">
                    <a href="{{route('site.product.list',['id'=>$main->id])}}" class="text-dark fw-bolder titlelink bg-light p-1 d-flex">
                        <p class="h5 m-0 d-flex align-items-center fw-bolder">
                            <i class="bi bi-caret-left-fill d-flex me-2"></i>
                            {{@$main->title}}
                        </p>
                    </a>
                    <div class="row w-100 mx-0 my-2">

                        @php

                        $child_nest = [];
                        foreach($main->childs as $childRow){
							$child_nest[] = [
								'id'=>$childRow->id,

								'title'=>$childRow->title,
								'bold'=>true,
								'link'=>route('site.product.list',['id'=>$childRow->id])
							];
							foreach($childRow->childs as $childRowItem){
								$child_nest[] = [
									'title'=>$childRowItem->title,
									'id'=>$childRowItem->id,

									'bold'=>false,
									'link'=>route('site.product.list',['id'=>$childRowItem->id])
								];
							}
                        }
                        $child_nest_view = collect($child_nest);

                        @endphp

                        @foreach($child_nest_view->chunk(15) as $key=>$child)
                        <div class="col-xxl-3 col-lg-3 col-md-6 p-1">
                            <ul class="p-0 m-0">
								@foreach($child as $childRowView)
									@if($childRowView['bold'] === false)
										<li class="list-unstyled">
											<a href="{{route('site.product.list',['id'=>@$childRowView['id']])}}" class="link d-flex align-items-center">
												<i class="bi bi-caret-left me-1 d-flex"></i>
												{{@$childRowView['title']}}
											</a>
										</li>
									@else
										<a href="{{route('site.product.list',['id'=>@$childRowView['id']])}}" class="text-one fw-bolder titlelink">
											<p class="h6 m-0 d-flex align-items-center fw-bolder" style="margin-bottom: 8px !important; margin-top: 5px !important;">
												<i class="bi bi-caret-left me-1 d-flex"></i>
												{{@$childRowView['title']}}
											</p>
										</a>
									@endif
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
