@extends('layouts.site.master')
@section('content')

<!-- =======================
Page Banner START -->
<section class="pb-0 pt-4 pb-md-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
					<!-- Content -->
					<div class="col-lg-9 order-1">
						<!-- Pre title -->
					<div class="badge text-bg-success">{{$post->category->title}}</div>
						<!-- Title -->
						<h1 class="mt-2 mb-0 fs-4">{{$post->title}}</h1>
						<!-- Info -->
						<p class="mt-2">{!! $post->description !!}</p>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main Content END -->
@stop