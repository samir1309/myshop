<div class="row w-100 m-0">
    {{ csrf_field() }}
    <div class="col-md-6">
        <label class="form-label">عنوان</label><span class="text-danger">*</span>
        <input name="title" type="text" class="form-control" value="@if(isset($data->title)){{$data->title}}@else {{ old('title') }}@endif">
    </div>
    <div class="col-md-6">
        <label class="form-label">مدت زمان </label><span class="text-danger">*</span>
        <input name="time" type="text" class="form-control" value="@if(isset($data->time)){{$data->time}}@else {{ old('time') }}@endif">
    </div>
    <div class="col-md-6">
        <label class="form-label">نام فایل  </label><span class="text-danger">*</span>
        <input name="file" type="text" class="form-control" value="@if(isset($data->file)){{$data->file}}@else {{ old('file') }}@endif">
    </div>

	<div class="col-lg-6 form-group">
		<label class="col-form-label"> تصویر(حداکثر حجم ۴۰ کیلو بایت ) </label>
		<input class="form-control" type="file" name="image" accept=".jpg, .png ,.JPEG ">
		@if(isset($data->image))
            <img src="{{ @$data -> image}}" class="w-50">
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
        <p> </p>
	</div>
	<div class="col-lg-6 form-group">
		<label for="description_seo" class="col-form-label">توضیحات سئو</label>
        <textarea class="form-control" v-model="description_seo"  id="description_seo" name="description_seo" rows="4">@if(isset($data->description_seo)){!!$data->description_seo !!}@endif</textarea>
        <p> </p>
    </div>

    <div class="col-lg-12 p-2">
        <div class="form-group">
            <button type="submit" class="btn btn-space btn-success m-0 px-5">ذخیره</button>
        </div>
    </div>
</div>

@section('js')

@endsection
