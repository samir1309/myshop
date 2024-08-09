
<head>
	<title>سایت </title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="آموزشی">
	<title>
			@yield('title',@$setting_header->title)

	</title>
	<!-- Dark mode -->
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

	<script src="{{asset('assets/admin/css/sweetalert2.all.min.js')}}"></script>
	<script src="{{asset('assets/admin/css/sweetalert2.min.css')}}"></script>
	
    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.rtl.min.css')}}"/>
	<link rel="shortcut icon" href="{{asset('assets/site/images/favicon.ico')}}">
	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/site/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/site/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/site/vendor/tiny-slider/tiny-slider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/site/vendor/glightbox/css/glightbox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/site/vendor/aos/aos.css')}}">
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/style-rtl.css?v3')}}">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<script>

document.addEventListener('DOMContentLoaded', () => {  
    const basketCountElement = document.getElementById('basket-count');  
    if (basketCountElement) {  
        // فراخوانی API یا هر روش دیگر برای گرفتن تعداد سبد خرید  
        fetch('/basket-count')  
            .then(response => response.json())  
            .then(data => {  
                basketCountElement.textContent = data.count;  
            })  
            .catch(error => {  
                console.error('Error fetching basket count:', error);  
            });  
    }  
});  
	</script>

</head>