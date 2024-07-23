<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ getFile('icon', @$general->favicon) }}">

    <title>
        @if (@$general->sitename)
            {{ __(@$general->sitename) . '-' }}
        @endif
        {{ __(@$pageTitle) }}
    </title>
    <link rel="stylesheet" href="{{ asset('asset/theme5/frontend/css/cookie.css') }}">
    <link href="{{ asset('asset/theme5/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/theme5/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme5/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme5/frontend/css/font-awsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/theme5/frontend/css/iziToast.min.css') }}">
    <link href="{{ asset('asset/theme5/frontend/css/style.css') }}" rel="stylesheet">


		<!-- Bootstrap v5.0.2 css -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="assets/fonts/font/font-awesome.min.css">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- slick slider css -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<!-- odometer css -->
		<link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		
		
		<style>

        @keyframes blink {

            0% { visibility: visible; }

            50% { visibility: hidden; }

            100% { visibility: visible; }

        }

        .blink-text {

            animation: blink 1s infinite;

        }

    </style>
		



<script type="text/javascript">
    var country_list = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Belarus", "Belgium",  "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Chad", "Chile", "China", "Colombia", "Congo", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands","Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Gibraltar", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait",  "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon",  "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", , "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen"];
    function choice(array) {
        return array[Math.floor(Math.random() * array.length)];
    }
    function randomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }
    function payinout() {
        var nu = Math.floor(randomNumber(800, 9500));
        var con = choice(country_list);
        var mode = choice(['deposited', 'withdrew', 'reinvested']);
        spop({
            template: "An Investor from " + con + " " + mode + " $" + nu + " ...",
            position: 'top-center',
            style: 'success',
            autoclose : 7000,
        });
    }
    setInterval(payinout,35000);
  
  </script>	
			<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="../../KSy54Enr818I.com/translate_a/element_cb%3DgoogleTranslateElementInit.js"></script>

    @stack('style')

	</head>


<body style="background-image: url('{{ getFile('body', 'body-bg.png') }}');">

    
    
    
    
    	<div class="offwrap"></div>

		<!--Preloader start here-->
		@if (@$general->preloader_status)
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/fav.png" alt="Static FX - An Enhanced trading and Investment platform tailored to investors needs. "></div>
                </div>
            </div>              
        </div>
        @endif
		<!--Preloader area end here-->
		
		<div>
		<center style="background-color: #0c6460 !important;">
        
        <div id="googleee_translate_element"></div>
    </center>
		</div>
		


    @if (@$general->allow_modal)
        @include('cookieConsent::index')
    @endif


    @if (@$general->analytics_status)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ @$general->analytics_key }}"></script>
        <script>
            'use strict'
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "{{ @$general->analytics_key }}");
        </script>
    @endif

    @include(template().'layout.header')
    <main id="main" class="main-img">
        @yield('content')
    </main>
    @include(template().'layout.footer')

    {{-- back to to btn --}}

    <button type="button" class="cmn-btn btn-sm btn-floating" id="btn-back-to-top">
        <i class="fas fa-arrow-up text-light"></i>
    </button>

    <script src="{{ asset('asset/theme5/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/slick.min.js') }}"></script>

    <script src="{{ asset('asset/theme5/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/TweenMax.min.js') }}"></script>

    <script src="{{ asset('asset/theme5/frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/main.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('asset/theme5/frontend/js/jquery.uploadPreview.min.js') }}"></script>
    	<!-- modernizr js -->
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- jquery latest version -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap v5.0.2 js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- op nav js -->
		<script src="assets/js/jquery.nav.js"></script>
		<!-- PageScroll2id onepage js -->
		<script src="assets/js/jquery.malihu.PageScroll2id.min.js"></script>
		<!-- owl.carousel js -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Slick js -->
		<script src="assets/js/slick.min.js"></script>
		<!-- wow js -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Skill bar js -->
		<script src="assets/js/skill.bars.jquery.js"></script>
		<!-- imagesloaded js -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- odometer & appear js -->
		<script src="assets/js/jquery.appear.min.js"></script>
		<script src="assets/js/odometer.min.js"></script>
		<!-- magnific popup js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- contact form js -->
		<script src="assets/js/contact.form.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>
	

    @stack('script')
    @if (@$general->twak_allow)
        <script type="text/javascript"> 
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "{{ @$general->twak_key }}";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            "use strict";
            iziToast.error({
                message: "{{ session('error') }}",
                position: 'topRight'
            });
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            "use strict";
            iziToast.success({
                message: "{{ session('success') }}",
                position: 'topRight'
            });
        </script>
    @endif

    @if (session()->has('notify'))
        @foreach (session('notify') as $msg)
            <script>
                "use strict";
                iziToast.{{ $msg[0] }}({
                    message: "{{ trans($msg[1]) }}",
                    position: "topRight"
                });
            </script>
        @endforeach
    @endif

    @if (@$errors->any())
        <script>
            "use strict";
            @foreach ($errors->all() as $error)
                iziToast.error({
                message: "{{ __($error) }}",
                position: "topRight"
                });
            @endforeach
        </script>
    @endif

    <script>
        'use strict'
        $(document).on('submit', '#subscribe', function(e) {
            e.preventDefault();
            const email = $('.subscribe-email').val();
            var url = "{{ route('subscribe') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    email: email,
                },
                success: (data) => {
                    iziToast.success({
                        message: data.message,
                        position: 'topRight',
                    });
                    $('.subscribe-email').val('');

                },
                error: (error) => {
                    if (typeof(error.responseJSON.errors.email) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.email,
                            position: 'topRight',
                        });
                    }

                }
            })

        });

        var url = "{{ route('user.changeLang') }}";

        $(".changeLang").change(function() {
            if ($(this).val() == '') {
                return false;
            }
            window.location.href = url + "?lang=" + $(this).val();
        });
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    
    
</body>
</html>