<!doctype html>
<html lang="fa">
@include('layouts.admin.blocks.head')

<body dir="rtl">
	<div class="">
		<div class="">
			@yield('contents')
		</div>
	</div>
	@include('layouts.admin.blocks.script')
	@include('layouts.message-swal')
</body>

</html>