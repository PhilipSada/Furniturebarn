<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Furniturebarn</title>

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