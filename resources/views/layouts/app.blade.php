<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Book an apartment at the Carlton in cannes for your vacations</title>

    <!--Meta Keywords and Description-->
    <meta name="description" content="Enjoy a unique experience, book a flat at the hotel carlton in cannes for your holidays with Michaël Zingraf Real Estate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" title="Favicon"/>

    <!-- Main CSS Files -->
    @vite('resources/css/app.css')

    @yield('dedicated_css')

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader 2 -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="bg-gold top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

@yield('content')

</div>
<!--Footer-->
<footer id="landing-footer" class="clearfix">
    <div class="row clearfix h-12">
        <p id="copyright" class="w-full text-center md:text-left">Made with love by
            <a href="https://www.michaelzingraf.com">Michaël Zingraf Real Estate</a> &
            <a href="https://carltoncannes.com/">Carlton Cannes</a></p>
    </div>
</footer>
<!--End of Footer-->

<!-- Include JavaScript resources -->
@vite(['resources/js/app.js'])
@yield('dedicated_js')
</body>
</html>
