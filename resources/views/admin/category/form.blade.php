<div class="row g-4">
			<!-- Left side START -->
	
			<!-- Left side END -->

			<!-- Right side START -->
			<div class="col-xl-12">

				<!-- Tab Content START -->
				<div class="tab-content">

					<!-- Personal Information content START -->
					<div class="tab-pane show active" id="tab-1">

						<div class="" id="tab-2">

						<div class="card shadow">

							<!-- Card header -->
							<div class="card-header border-bottom">
								<h5 class="card-header-title">اضافه کردن دسته بندی جدید</h5>
							</div>

							<!-- Card body START -->
							<div class="card-body">
                                <form method="post"  class="row g-4" action="{{URL::action('Admin\CategoryController@postAddCategory')}}">

@csrf
									<!-- Input item -->
									<div class="col-6">
										<label class="form-label" >عنوان دسته</label>
										<input type="text" id="title" name="title"  class="form-control" placeholder="عنوان دسته"
                                        value="@if(isset($data->title)){{$data->title}}@endif">
									
									</div>
                                    	<!-- Choice item -->
									<div class="col-lg-6">
                                    <label class="form-label" >انتخاب دسته</label>
										<select class="form-select js-choice z-index-9 border-0 bg-light" name="parent_id" value="@if(isset($data->parent_id)) {{$data->parent_id}} @endif" aria-label=".form-select-sm" >
                                        <option value="">انتخاب دسته : </option>
                                            @foreach($categories as $row)
                                         <option value="1"
                                                        @if(isset($data->parent_id)) @if($data->parent_id==$row['id']) selected @endif
                                                    @endif
                                                >{{$row['title']}}
                                         </option>
                                            @endforeach
										</select>
									</div>

                                    <div class="col-lg-6 form-group">
                                        <label>   تصویر کاور(حداکثر حجم 30kb و سایز آپلود: ۳۵۰*۳۵۰) </label>
                                                <input class="form-control" type="file" name="cover">
                                                @if(isset($data->cover)) <img src="{{asset('assets/uploads/content/cat/'.$data->cover)}}" style="height: 150px; width: 100%"> 
                                                @endif
                                    </div>
                                    
                                            <div class="col-lg-1 form-group py-4">
                                                <a type="button" class="btn btn-secondary"  href="{{asset('assets/uploads/help/kajshop.wmv')}}" target="_blank">راهنما</a>
                                            </div>
	
                                     <div class="col-lg-3">
										<label class="form-label">نمایش وضعیت</label>
										<div class="form-check form-switch form-check-lg mb-0">
											<input class="form-check-input mt-0 price-toggle me-2" type="checkbox" id="flexSwitchCheckDefault" 
                                            value="1" @if(isset($data->status) && $data->status == 1) checked="checked" @endif name="status" id="status">
     
											<label class="form-check-label mt-1" for="flexSwitchCheckDefault"
                                            value="0" @if(isset($data->status) && $data->status == 0) checked="unckeked" @endif name="status" id="status">آفلاین</label>
										</div>
									</div>
                                    <div class="col-6">
										<label class="form-label">عنوان seo</label>
										<input type="text" name="title_seo" class="form-control"  value="@if(isset($data->title_seo)){{$data->title_seo}}@endif"  placeholder="عنوان دسته">
									
									</div>
                                    <!-- Textarea item -->
                                    <div class="col-lg-6">
										<label class="form-label">توضیحات seo </label>
										<textarea class="form-control " name="description_seo" rows="4">@if(isset($data->description_seo)){!!$data->description_seo !!}@endif</textarea>
									</div>
                                     	<!-- Textarea item -->
									<div class="col-lg-12">
										<label class="form-label">توضیحات</label>
										<textarea class="form-control ckeditor" rows="3" name="description">@if(isset($data->description)){!! $data->description !!}@endif</textarea>
									</div>
									<!-- Save button -->
									<div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-0" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">ذخیره</button>

									</div>
								</form>
							</div>
							<!-- Card body END -->

						</div>
					</div>	
					</div>
					<!-- Personal Information content END -->

				</div>
				<!-- Tab Content END -->
			</div>
			<!-- Right side END -->
		</div> <!-- Row END -->		