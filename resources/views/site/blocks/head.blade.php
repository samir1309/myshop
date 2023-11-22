<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#f4b19f"/>
	<link rel="shortcut icon" href="{{asset('assets/uploads/content/set/'.@$setting_header->favicon)}}" type="image/x-icon">
	<title>
			@yield('title',@$setting_header->title)

	</title>
	
	<meta name="google-site-verification" content="FMr32fvkhEqnh3GGZAN_qiw1iGv6ZS9UjaS_Iv-EiNo" />
	
    <meta name="robots" content="follow,index" />
	<link rel="alternate" hreflang="fa" href="{{url()->current()}}" />
	<meta name="enamad" content="879042"/>
	<meta name="enamad" content="681858"/>
	<meta name="title" content="@yield('title',@$setting_header->title)">
	<meta name="description" content="@yield('description',@$setting_header->description_seo)"/>
	<link rel="canonical" href="{{url()->current()}}" />

	<meta property="og:title" content="@yield('title',@$setting_header->title)">
	<meta property="og:description" content="@yield('description',@$setting_header->description_seo)"/>
	<meta property="og:locale" content="fa_ir" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:image" content="@yield('image_seo',asset('assets/uploads/content/set/'.@$setting_header->logo))" />
    <meta property="og:type" content="@yield('type','website')" />
	<link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.rtl.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/site/css/kaj.min.css?V88')}}"/>
    <link rel="preload" href="{{asset('assets/site/css/style.css?v3')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

	@if(@Request::segments()[0] !== "cat")
	<link rel="stylesheet" href="{{asset('assets/site/css/persian.datepicker.min.css?V0.0')}}"/>
	@endif
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CZQLSP0WRY" async></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-157025199-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-274192066-1" async></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-157025199-1');
    </script>
    <style>
        .itemcolors .nav-link.active, .itemcolors .show > .nav-link {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 5px solid #fff !important;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
        }
        .magic-thumbs-wrapper {
            opacity: 0 !important;
        }
        @media (max-width:800px) {
            .card-pro .prc {
              font-size: 0.8rem !important;
            }
        }
    </style>
    <script>
        !function (t, e, n) {
            t.yektanetAnalyticsObject = n, t[n] = t[n] || function () {
                t[n].q.push(arguments)
            }, t[n].q = t[n].q || [];
            var a = new Date, r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(),
                c = e.getElementsByTagName("script")[0], s = e.createElement("script");
            s.id = "ua-script-dDZNlzvU"; s.dataset.analyticsobject = n;
            s.async = 1; s.type = "text/javascript";
            s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/dDZNlzvU/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c)
        }(window, document, "yektanet");
    </script>
	<!-- Jquery JS -->
	<script src="{{asset('assets/site/jquery.min.js')}}"></script>
	<script src="{{asset('assets/site/js/vue.min.js')}}"></script>
	<script src="{{asset('assets/site/js/axios.min.js')}}"></script>
	@if(@Request::segments()[0] !== "cat")
	<script src="{{asset('assets/site/js/sweetalert.min.js')}}"></script>
	<script src="{{asset('assets/site/js/persian.date.min.js')}}" async></script>
	<script src="{{asset('assets/site/js/persian.datepicker.min.js')}}" async></script>
	@endif
</head>
