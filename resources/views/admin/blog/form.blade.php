{{ csrf_field() }}
<div class="row">
	<div class="col-lg-6 form-group">
		<label for="title" class="col-form-label">عنوان</label>
		<input id="title" name="title" type="text" class="form-control"
			value="@if(isset($article->title)){{$article->title}}@endif">
	</div>
    <div class="col-lg-6 form-group">
        <label for="category_id" class="col-form-label">
            دسته بندی :
        </label>
        <select class="form-control" id="category_id" name="category_id" value="@if(isset($article->category_id)){{$article->category_id}}@endif">
            <option value="">انتخاب دسته : </option>
            @foreach($blogcategory as $row)
                <option value="{{$row->id}}" @if(isset($article->category_id)) @if($article->category_id==$row->id) selected @endif @endif >
                    {{$row->title}}
                </option>
            @endforeach
        </select>

    </div>


	<div class="col-lg-6 form-group">
		<label class="col-form-label"> تصویر(حداکثر حجم ۴۰ کیلو بایت ) </label>
		<input class="form-control" type="file" name="image">
		@if(isset($article->image))
            <img src="{{asset('assets/uploads/content/art/medium/'.$article->image)}}" class="w-50">
        @endif
	</div>

  
    <div class="form-group">
        <label for="description" class="col-form-label">توضیحات </label>
        <textarea class="form-control ckeditor" id="description" name="description" rows="3">
            @if(isset($article->description)){!!$article->description !!}@endif</textarea>
    </div>
	<div class="col-lg-6 form-group">
		<label for="title_seo" class="col-form-label">عنوان سئو </label>
        <input id="title_seo" v-model="title_seo" required  oninvalid='Command: toastr["error"]("وارد کردن عنوان سئو اجباریست", "خطا")' name="title_seo" type="text" class="form-control" value="@if(isset($article->title_seo)){{$article->title_seo}}@endif">
        <p> </p>
	</div>
	<div class="col-lg-6 form-group">
		<label for="description_seo" class="col-form-label">توضیحات سئو</label>
        <textarea class="form-control" v-model="description_seo"  id="description_seo" name="description_seo" rows="4">@if(isset($article->description_seo)){!!$article->description_seo !!}@endif</textarea>
        <p> </p>
    </div>
    <div class="col-lg-3 form-group">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">
            نمایش
        </label>
        <div class="col-12 col-sm-8 col-lg-6 pt-1">
            <div class="switch-button switch-button-yesno">
                <input type="checkbox" value="1" @if(isset($article->status) && $article->status == 1) checked="checked" @endif name="status" id="status">
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
