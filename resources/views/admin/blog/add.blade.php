@extends('layouts.admin.master')
@section('title','جدید')
@section('content')

<div class="container-fluid dashboard-content" id="blog68">
	<div class="row w-100 m-0">
		<div class="col-lg-12 mx-auto py-1 px-0">
			<h3 class="bg-white py-2 px-4 rounded-lg">
				اضافه کردن مقاله
			</h3>
			<div class="card rounded-lg border-0 p-3">
				<form method="post" name="blogForm" action="{{ route('admin.blog.add') }}"
					enctype="multipart/form-data" onsubmit="return (validateForm())">
					@include('admin.blog.form')
				</form>
			</div>
		</div>
	</div>
</div>

 
@stop
