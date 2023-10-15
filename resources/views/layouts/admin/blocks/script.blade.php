
<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
<!-- Bootstrap JS -->
<script src="{{asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/admin/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/admin/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/overlay-scrollbar/js/overlayscrollbars.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/admin/js/functions.js')}}"></script>

<!-- =============== ckeditor SCRIPTS ===============-->
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('assets/admin/toastr/toastr.js')}}"></script>

@yield('js')


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
