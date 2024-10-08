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
								<h5 class="card-header-title">اضافه کردن  محصول جدید</h5>
							</div>

							<!-- Card body START -->
							<div class="card-body">
                                <form method="post"  class="row g-4" action="{{URL::action('Admin\ProductController@postAddProduct')}}">

                            @csrf
									<!-- Input item -->
									<div class="col-6">
										<label class="form-label" >عنوان  محصول</label>
										<input type="text" id="title" name="title"  class="form-control" placeholder="عنوان  محصول"
                                        value="@if(isset($data->title)){{$data->title}}@endif">
									
									</div>
									<div class="col-lg-6 form-group">
										<label for="url" class="col-form-label">url</label>
										<input id="url" name="url" type="text" class="form-control"
											value="@if(isset($data->url)){{$data->url}}@endif">
									</div>
									<div class="col-lg-6 form-group">
										<label for="video_link" class="col-form-label">لینک ویدیو</label>
										<input id="video_link" name="video_link" type="text" class="form-control"
											value="@if(isset($data->video_link)){{$data->video_link}}@endif">
									</div>

									<div class="col-lg-6 form-group">
		<label class="col-form-label"> تصویر(حداکثر حجم ۴۰ کیلو بایت ) </label>
		<input class="form-control" type="file" name="image" accept=".jpg, .png ,.JPEG ">
		@if(isset($data->image))
            <img src="{{ @$data -> showImage}}" class="w-50">
        @endif
	</div> 
                                    	<!-- Choice item -->
									<div class="col-lg-6">
                                    <label class="form-label">دسته</label>
										


<div class="col-lg-6">  
    <label class="form-label">دسته</label>  
    <select class="form-select js-choice z-index-9 border-0 bg-light" name="category_id[]" multiple>  
        <option value="">انتخاب دسته: </option>  
        @foreach($category as $category)  
            <option value="{{ $category->id }}" @if(isset($data->id) && $data->categories->contains($category->id)) selected @endif>  
                {{ $category->title }}  
            </option>  
        @endforeach  
    </select>  
</div>



									</div>
	
                    
                                    <div class="col-lg-6 ">
                                        <label for="old_price" class="col-form-label">
                                        قیمت اصلی :

                                        </label>
                                            <input type="text" name="old_price" class="form-control"  value="@if(isset($data->old_price)){{$data->old_price}}@endif"  placeholder=" قیمت اصلی">

                                    </div>
                                    <div class="col-lg-6 ">
                                        <label for="old_price" class="col-form-label">
                                            قیمت با تخفیف:
                                        </label>
                                            <input type="text" name="price" class="form-control"  value="@if(isset($data->price)){{$data->price}}@endif"  placeholder=" قیمت با تخفیف">

                                    </div>
                                    <div class="col-6">
										<label class="form-label">عنوان seo</label>
										<input type="text" name="title_seo" class="form-control"  value="@if(isset($data->title_seo)){{$data->title_seo}}@endif"  placeholder="عنوان  محصول">
									
									</div>
                                    <!-- Textarea item -->
                                    <div class="col-lg-6">
										<label class="form-label">توضیحات seo </label>
										<textarea class="form-control " name="description_seo" rows="4">@if(isset($data->description_seo)){!!$data->description_seo !!}@endif</textarea>
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
									  	<!-- Textarea item -->
										  <div class="col-lg-12">
										<label class="form-label">توضیحات کوتاه </label>
										<textarea class="form-control ckeditor" rows="3" name="how_to_use">@if(isset($data->how_to_use)){!! $data->how_to_use !!}@endif</textarea>
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


		<script>

$(document).ready(function(){

// قیمت اصلی
formatPrice($('input[name="old_price"]'));

// قیمت تخفیف
formatPrice($('input[name="price"]'));

function formatPrice(input) {

  let price = input.val();

  price = price.replace(/\D/g,'');
  price = price.replace(/(\d{3})/g, '$1,');

  input.val(price);

}

});
		</script>