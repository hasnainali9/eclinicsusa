<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Zenix - Crypto Admin Dashboard" />
        <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
        <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
        <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png" />
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{GetSettingData('web_title')}}</title>
    
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/back/vendor/chartist/css/chartist.min.css')}}">
        <link href="{{ asset('/back/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{ asset('/back/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{ asset('/back/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('/back/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/back/vendor/toastr/css/toastr.min.css')}}">
        <script src="https://kit.fontawesome.com/c73e5b346d.js" crossorigin="anonymous"></script>
        <style>
            #ListDatatableView_info{
                color: white!important;
            }
            .paginate_button {
                display: flex!important;
                justify-content: center!important;
                text-align: center!important;
                align-items: middle!important;
            }
        </style>
    </head>
    <body>
        <div id="main-wrapper">
                <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{url('/home')}}" class="brand-logo">
            <img src="{{url('/')}}{{urldecode(GetSettingData('web_logo_light'))}}" width="100" class="p-3" alt="{{GetSettingData('web_title')}}">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->
    


    
  

    
    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                    </div>
                    <ul class="navbar-nav header-right main-notification">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-theme-mode" href="#">
                                <i id="icon-light" class="fa fa-sun-o"></i>
                                <i id="icon-dark" class="fa fa-moon-o"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell dz-fullscreen" href="#">
                                <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{Auth::user()->name}}" width="20" alt=""/>
                                <div class="header-info">
                                    <span>{{Auth::user()->name}}</span>
                                    <small>{{Auth::user()->email}}</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                
                                <a href="javascript:;" onclick='document.getElementById("logout").submit()' class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="sub-header">
                <div class="d-flex align-items-center flex-wrap me-auto">
                    <h5 class="dashboard_bar">@yield('page-title')</h5>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <div class="main-profile">
                <div class="image-bx">
                    <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{Auth::user()->name}}" alt="">
                    <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
                </div>
                <h5 class="name"><span class="font-w400">Hello,</span> {{Auth::User()->name}}</h5>
                <p class="email">{{Auth::User()->email}}</p>
            </div>
            <ul class="metismenu" id="menu">
                <li class="nav-label">Website Settings</li>
                <li><a class=" ai-icon" href="{{route('home.sliders')}}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Home Page Slider</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                        <span class="nav-text">Services</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('home.services')}}">All Services</a></li>
                        <li><a href="{{route('home.services.show.featured')}}">Featured Services</a></li>
                        <li><a href="{{route('home.SubServices')}}">Sub Services</a></li>
                    </ul>
                </li>
                <li><a class=" ai-icon" href="{{route('home.testimonial')}}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Testimonials</span>
                    </a>
                </li>
                <li><a class=" ai-icon" href="{{route('home.social')}}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Social Links</span>
                    </a>
                </li>
    

                <li class="nav-label">Blog Settings</li>
                <li><a class=" ai-icon" href="{{url('/')}}/blog/admin" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Blog Panel</span>
                    </a>
                </li>
                
                <li class="nav-label">Account Settings</li>
                <li>
                    <form method="POST" style="display: none" id="logout" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                      </form>
                    <a class=" ai-icon" onclick='document.getElementById("logout").submit()' href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
            <div class="copyright">
                <p><strong>{{GetSettingData('web_title')}} Dashboard</strong> ?? {{GetSettingData('web_title')}} All Rights Reserved</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
 
            @yield('content')

        <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>{{urldecode(GetSettingData('web_copyright'))}}</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
    
    
    
    
        </div>

       <!-- Required vendors -->
       <script src="{{ asset('/back/vendor/global/global.min.js')}}"></script>
       <script src="{{ asset('/back/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
       
       <script src="{{ asset('/back/vendor/owl-carousel/owl.carousel.js')}}"></script>
       <script src="{{ asset('/back/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
       <script src="{{ asset('/back/js/plugins-init/datatables.init.js')}}"></script>
       <script src="{{ asset('/back/vendor/ckeditor/ckeditor.js')}}"></script>
       <script src="{{ asset('/back/vendor/toastr/js/toastr.min.js')}}"></script>
       <script src="{{ asset('/back/js/custom.js')}}"></script>
       <script src="{{ asset('/back/js/deznav-init.js')}}"></script>
       <script>
           
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},1500);
            @if(session()->has('message'))
                    toastr.success("{{ session()->get('message') }}", {
                        timeOut: 500000000,
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !0,
                        progressBar: !0,
                        positionClass: "toast-top-right",
                        preventDuplicates: !0,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut"
                    });   
            @endif
            @if($errors->any())
            toastr.error("{{$errors->first()}}", "Top Right", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            @endif
		});
	</script>
    @yield('scripts')
    </body>
</html>