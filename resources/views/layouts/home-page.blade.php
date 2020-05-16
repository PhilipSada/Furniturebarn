<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="website for a furniture manufacturing company">
        {{-- <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"> --}}
        <meta name="image_src" content="https://furniturebarnng.com/images/preview.png">
        <meta name="image_url" content="https://furniturebarnng.com/images/preview.png">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Furniturebarn">
        <meta property="og:image:url" content="http://furniturebarnng.com/images/preview.png">        
        <meta property="og:image:secure_url" content="https://furniturebarnng.com/images/preview.png">        
        <meta property="og:image:type" content="image/png">        
        <meta property="og:image:width" content="1897">        
        <meta property="og:image:height" content="932">        
        <meta property="og:description" content="website for a furniture manufacturing company">
        <meta property="og:url" content="http://furniturebarnng.com/">
        <meta property="og:secure_url" content="https://furniturebarnng.com/">
        <meta property="og:site_name" content="Furniturebarn">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Furniturebarn">
        <meta name="twitter:description" content="website for a furniture manufacturing company">
           <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

       
       
      
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body data-barba="wrapper">
        <div class="pre-load-wrapper">
            <div class="pre-load-content">
                <div class="pre-load-logo-container"><img src="/images/logo.png" class="pre-load-logo"></div>
                <div class="pre-loading-spinner"></div>
            </div>
           
        </div>
        <div class="loading-bg"></div>
        <nav>
            @include('includes/nav')
        </nav>

        <section>
            @yield('content')
        </section> 
          
        <footer>
            @include('includes/footer')
        </footer>
        
      
        <script src="https://unpkg.com/@barba/core"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>