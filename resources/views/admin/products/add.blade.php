@extends('layouts.admin.master')
@section('title','جدید')
@section('content')


	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			<div class="col-12 mb-3">
				<h1 class="h3 mb-2 mb-sm-0 fs-4">اضافه کردن محصول جدید</h1>
			</div>
		</div>


    <form method="post" action="{{ route('admin.products.add') }} "
                    enctype="multipart/form-data">
                    @csrf
                    @include('admin.products.form');
                </form>
	</div>
	<!-- Page main content END -->
    @endsection

    <script>
    var cks = document.getElementsByClassName('ckeditor');
    Array.from(cks).forEach((el) => {
        console.log(el)
        CKEDITOR.replace(el, {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    });
</script>
