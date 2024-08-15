
<!DOCTYPE html>
<html lang="fa" dir="rtl">
@include('layouts.site.blocks.head')
<body>
@include('sweetalert::alert')
@include('layouts.site.blocks.menu')
@yield('content')  
@include('layouts.site.blocks.footer')
<!-- =======================
Footer END -->
<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
@include('layouts.site.blocks.script')

</body>
</html>