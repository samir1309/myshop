
<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('layouts.site.blocks.head')

<body>

<!-- Header START -->
@include('layouts.site.blocks.menu')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
@include('site.panel.header')
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->

@yield('content')

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('site.panel.footer')

<!-- =======================
Footer END -->
@include('site.panel.script')


</body>

</html>