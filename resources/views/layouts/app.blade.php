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

<div class="page">
      <!-- page header -->
            <header class="page-header main-page sticky">
                <div class="sticky-wrapp">
                    <div class="sticky-container">
                        <!-- logo -->
                        <section id="logo" class="logo">
                            <div>
                                <a href="index.html"><img src="/images/frontend/blue/logo.png" alt="Clinico"></a>
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
                    <div class="grid-col grid-col-3">
                        <!-- last news -->
                        <section class="widget-alt">
                            <div class="widget-icon"></div>
                            <div class="widget-title"></div>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
                            </ul>
                        </section>
                        <!--/ last news -->
                    </div>
                    
                    <div class="grid-col grid-col-3">
                        <!-- location -->
                        <section class="widget-alt location">
                            <div class="widget-icon"></div>
                            <div class="widget-title">Location</div>
                            <address>Address will be appear here, some details here City Name, Country.</address>
                            <ul>
                                <li><i class="fa fa-phone"></i>(907) 555-55555</li>
                                <li><i class="fa fa-at">@</i>company@youremail.com</li>
                                <li><i class="fa fa-skype"></i>Medical Skype Name</li>
                            </ul>
                            <nav>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </nav>
                        </section>
                        <!--/ location -->  
                    </div>
                    
                    <div class="grid-col grid-col-3">
                        <!-- last news -->
                        <section class="widget-alt recent-posts">
                            <div class="widget-icon"></div>
                            <div class="widget-title">Recent Posts</div>
                            <ul>
                                <li>
                                    <a href="#"><img src="pic/post/1.png" width="80" height="80" alt=""></a>
                                    <p><a href="#">New study links lutein with eye health benefits, consectetur adipiscing</a><br>5 months ago</p>
                                </li>
                                <li>
                                    <a href="#"><img src="pic/post/2.png" width="80" height="80" alt=""></a>
                                    <p><a href="#">Pets may reduce risk of heart disease, et congue dolor heart</a><br>8 months ago</p>
                                </li>
                                <li>
                                    <a href="#"><img src="pic/post/3.png" width="80" height="80" alt=""></a>
                                    <p><a href="#">Discoveries offer a new explanation for diabetes, consectetur</a><br>10 months ago</p>
                                </li>
                            </ul>
                        </section>
                        <!--/ last news -->                     
                    </div>
                    
                    <div class="grid-col grid-col-3">
                        <!-- work time -->
                        <section class="widget-alt work-time">
                            <div class="widget-icon"></div>
                            <dl>
                                <dt>Mon</dt>
                                <dd>08:00 am - 12:00 pm</dd>
                                <dt>Tue</dt>
                                <dd>01:00 am - 05:00 pm</dd>
                                <dt>Wed</dt>
                                <dd>Free day</dd>
                                <dt>Thu</dt>
                                <dd>08:00 am - 12:00 pm</dd>
                                <dt>Fri</dt>
                                <dd>08:00 am - 12:00 pm</dd>
                                <dt>Sat</dt>
                                <dd>08:00 am - 12:00 pm</dd>
                                <dt>Sun</dt>
                                <dd>Free day</dd>
                            </dl>
                            <a href="#" class="button">Make an Appointment</a>
                        </section>
                        <!--/ work time -->                         
                    </div>
                </div>
            </footer>
            <!--/ page footer -->
            
            <!-- copyrights -->
            <div class="copyrights">Copyrights ©2014: Clinico - Responsive Medical and Health Template</div>
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
    <!-- EASYPIECHART -->
        <script type="text/javascript" src="/js/frontend/jquery.easypiechart.js"></script>
    <!--/ EASYPIECHART -->
        <script type="text/javascript" src="/js/frontend/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="/js/frontend/scripts.js"></script>
</body>
</html>
