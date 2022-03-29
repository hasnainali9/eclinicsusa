<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{GetSettingData('web_title')}}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/frontend/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c73e5b346d.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="page">
      <!-- page header -->
            <header class="page-header main-page sticky">
                <div class="sticky-wrapp">
                    <div class="sticky-container">
                        <!-- logo -->
                        <section id="logo" class="logo">
                            <div>
                                <a href="{{url('/')}}"><img src="{{url('/')}}{{urldecode(GetSettingData('web_logo_dark'))}}" alt="{{GetSettingData('web_title')}}"></a>
                            </div>
                        </section>
                        <!--/ logo -->
                        
                        <!-- main nav -->
                        <x-navbar/>
                        <!--/ main nav -->
                        
                        
                    </div>
                </div>
            </header>
            <!--/ page header -->

            @yield('content')

              <!-- page footer -->
            <footer class="page-footer">
                <a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
                
                <div class="grid-row">
                    <div class="grid-col grid-col-4">
                        <!-- last news -->
                        <section class="widget-alt">
                            <div class="widget-icon"><img src="{{url('/')}}{{urldecode(GetSettingData('web_logo_light'))}}" alt="Ezmd logo"></div>
                            <div class="widget-title"></div>
                            <ul>
                                <li>{{urldecode(GetSettingData('web_footer_content'))}}</li>
                            </ul>
                        </section>
                        <!--/ last news -->
                    </div>
                    
                    <div class="grid-col grid-col-8">
                        <!-- location -->
                        <section class="widget-alt location">
                            <div class="widget-icon"></div>
                            <div class="widget-title">Location</div>
                            <address>{!!urldecode(GetSettingData('web_address'))!!}</address>
                            <ul>
                                <li><i class="fa fa-phone"></i>{{GetSettingData('web_phone_no')}}</li>
                                <li><i class="fa fa-at">@</i>{{GetSettingData('web_footer_email')}}</li>
                            </ul>
                            <nav>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </nav>
                        </section>
                        <!--/ location -->  
                    </div>
                    
                   
                </div>
            </footer>
            <!--/ page footer -->
            
            <!-- copyrights -->
            <div class="copyrights">{{urldecode(GetSettingData('web_copyright'))}}</div>
            <!--/ copyrights -->
</div>
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
        <script type="text/javascript" src="/js/frontend/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="/js/frontend/scripts.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
