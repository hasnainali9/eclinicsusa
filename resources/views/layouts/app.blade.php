<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/frontend/styles.css') }}" rel="stylesheet">
</head>
<body>
            @yield('content')

        <script type="text/javascript" src="/js/frontend/jquery.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="/js/frontend/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.flot.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/js/frontend/greensock.js"></script>
        <script type="text/javascript" src="/js/frontend/layerslider.transitions.js"></script>
        <script type="text/javascript" src="/js/frontend/layerslider.kreaturamedia.jquery.js"></script>

    <!-- Superscrollorama -->       
        <script type="text/javascript" src="/js/frontend/jquery.superscrollorama.js"></script>
        <script type="text/javascript" src="/js/frontend/TweenMax.min.js"></script>
        <script type="text/javascript" src="/js/frontend/TimelineMax.min.js"></script>
    <!--/ Superscrollorama -->
    
        <script type="text/javascript" src="/js/frontend/jquery.ui.core.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.ui.widget.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.ui.tabs.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery-ui-tabs-rotate.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.ui.accordion.min.js"></script>
        <script type="text/javascript" src="/js/frontend/jquery.tweet.js"></script>
    <!-- EASYPIECHART -->
        <script type="text/javascript" src="/js/frontend/jquery.easypiechart.js"></script>
    <!--/ EASYPIECHART -->
        <script type="text/javascript" src="/js/frontend/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="/js/frontend/scripts.js"></script>
</body>
</html>
