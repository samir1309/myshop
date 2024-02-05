
<head>
	<title>سایت آموزشی آنلاین</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="Eduport - قالب HTML دوره آنلاین و آموزش">


	<script src="{{asset('assets/admin/css/sweetalert2.all.min.js')}}"></script>
	<script src="{{asset('assets/admin/css/sweetalert2.min.css')}}"></script>


	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/admin/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style-rtl.css')}}">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="{{asset('assets/admin/libs/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendor/apexcharts/css/apexcharts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendor/overlay-scrollbar/css/overlayscrollbars.min.css')}}">
	<!-- toast -->
    <link rel="stylesheet" href="{{asset('assets/admin/toastr/toaster.css')}}">
	<!-- Theme CSS -->

</head>
@yield('css')
