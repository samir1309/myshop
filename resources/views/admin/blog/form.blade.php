{{ csrf_field() }}
<div class="row">
	<div class="col-lg-6 form-group">
		<label for="title" class="col-form-label">عنوان</label>
		<input id="title" name="title" type="text" class="form-control"
			value="@if(isset($data->title)){{$data->title}}@endif">
	</div>
    <div class="col-lg-6 form-group">
        <label for="category_id" class="col-form-label">
            دسته بندی :
        </label>
        <select class="form-control" id="category_id" name="category_id" value="@if(isset($data->category_id)){{$data->category_id}}@endif">
            <option value="">انتخاب دسته : </option>
            @foreach($article as $row)
                <option value="{{$row->id}}" @if(isset($data->category_id)) @if($data->category_id==$row->id) selected @endif @endif >
                    {{$row->title}}
                </option>
            @endforeach
        </select>

    </div>


	<div class="col-lg-6 form-group">
		<label class="col-form-label"> تصویر(حداکثر حجم ۴۰ کیلو بایت ) </label>
		<input class="form-control" type="file" name="image">
		@if(isset($data->image))
            <img src="{{asset('assets/uploads/content/art/medium/'.$data->image)}}" class="w-50">
        @endif
	</div>

  
    <div class="form-group">
        <label for="description" class="col-form-label">توضیحات </label>
        <textarea class="form-control ckeditor" id="description" name="description" rows="3">
            @if(isset($data->description)){!!$data->description !!}@endif</textarea>
    </div>
	<div class="col-lg-6 form-group">
		<label for="title_seo" class="col-form-label">عنوان سئو </label>
        <input id="title_seo" v-model="title_seo" required  oninvalid='Command: toastr["error"]("وارد کردن عنوان سئو اجباریست", "خطا")' name="title_seo" type="text" class="form-control" value="@if(isset($data->title_seo)){{$data->title_seo}}@endif">
        <p> کاراکتر باقی مانده: @{{ 70-title_seo.length }}</p>
	</div>
	<div class="col-lg-6 form-group">
		<label for="description_seo" class="col-form-label">توضیحات سئو</label>
        <textarea class="form-control" v-model="description_seo"  id="description_seo" name="description_seo" rows="4">@if(isset($data->description_seo)){!!$data->description_seo !!}@endif</textarea>
        <p> کاراکتر باقی مانده: @{{ 170-description_seo.length }}</p>
    </div>
    <div class="col-lg-3 form-group">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">
            نمایش
        </label>
        <div class="col-12 col-sm-8 col-lg-6 pt-1">
            <div class="switch-button switch-button-yesno">
                <input type="checkbox" value="1" @if(isset($data->status) && $data->status == 1) checked="checked" @endif name="status" id="status">
                <span>
                    <label for="status"></label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-12 p-2">
        <div class="form-group">
            <button type="submit" class="btn btn-space btn-success m-0 px-5">ذخیره</button>
        </div>
    </div>
</div>
@section('js')

@endsection
