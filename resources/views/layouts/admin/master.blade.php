

<!DOCTYPE html>
<html lang="fa" dir="rtl">
@include('layouts.admin.blocks.head')
@include('sweetalert::alert')
<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- Sidebar START -->
@include('layouts.admin.blocks.sidebar')
<!-- Sidebar END -->

<!-- Page content START -->
<div class="page-content">

	<!-- Top bar START -->
	@include('layouts.admin.blocks.menu')
	<!-- Top bar END -->

	<!-- Page main content START -->
	@yield('content')
	<!-- Page main content END -->
</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@include('layouts.admin.blocks.script')
</body>

</html>
