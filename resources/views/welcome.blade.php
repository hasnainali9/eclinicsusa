@extends('layouts.app')

@section('content')

            <!-- slider -->
            <div class="slider-wrapper">
                <section class="slider" id="slider">
                    <div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">                    
                        <img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
                        
                        <div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
                            <span class="icon fa fa-heart"></span>
                            <h2><span>SYMPTOM</span>CHECKER</h2>
                            <p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
                            <div class="buttons">
                                <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                                --><a href="#" class="button">Read More</a><!--
                                --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">               
                        <img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
                        
                        <div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
                            <span class="icon fa fa-comments"></span>
                            <h2><span>HELP</span>ONLINE</h2>
                            <p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
                            <div class="buttons">
                                <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                                --><a href="#" class="button">Read More</a><!--
                                --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
                        <img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">
                        
                        <div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
                            <span class="icon fa fa-flask"></span>
                            <h2><span>LAB</span>TESTING</h2>
                            <p>Vestibulum rutrum luctus porta. Maecenas elit nibh</p>
                            <div class="buttons">
                                <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                                --><a href="#" class="button">Read More</a><!--
                                --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--/ slider -->
            
            <!-- page content -->
            <main class="page-content">
                <div class="grid-row">
                    <!-- benefits -->
                    <section class="benefits">
                        <ul>
                            <li>
                                <div class="pic"><i class="fa fa-heart"></i></div>
                                <div class="text">
                                    <h2>Heart Rate</h2>
                                    <p>Aliquam ut lorem scelerisque, consequat mi quis, scelerisque massa.</p>
                                    <a href="#" class="more"></a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><i class="fa fa-flask"></i></div>
                                <div class="text">
                                    <h2>Lab Test</h2>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient liquam montes liquam montes.</p>
                                    <a href="#" class="more"></a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><i class="fa fa-stethoscope"></i></div>
                                <div class="text">
                                    <h2>Symptom Check</h2>
                                    <p>Suspendisse mattis tristique libero at placerat. Nullam diam risus.</p>
                                    <a href="#" class="more"></a>
                                </div>
                            </li>
                            <li>
                                <div class="pic"><i class="fa fa-comments-o"></i></div>
                                <div class="text">
                                    <h2>Online Help</h2>
                                    <p>Pellentesque quam metus, venenatis quis eleifend sit amet porttitor.</p>
                                    <a href="#" class="more"></a>
                                </div>
                            </li>

                        </ul>
                    </section>
                    <!--/ benefits -->
                </div>
                
                <div class="grid-row">
                    <!-- services -->
                    <section class="services">
                        <ul>
                            <li>
                                <a class="pic"><i class="fa fa-leaf"></i></a>
                                <h2><a href="#">Transplant Services</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
                                <a href="#" class="more fa fa-long-arrow-right"></a>
                            </li>
                            <li>
                                <a class="pic"><i class="fa fa-user-md"></i></a>
                                <div class="text">
                                    <h2><a href="#">Qualified Doctors</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit laoreet. Cras pharetra dolor vitae malesuada facilisis.</p>
                                    <a href="#" class="more fa fa-long-arrow-right"></a>
                                </div>
                            </li>
                            <li>
                                <a class="pic"><i class="fa fa-clock-o"></i></a>
                                <h2><a href="#">24 Hours Service</a></h2>
                                <p>Mauris consectetur, dui eget ullamcorper hendrerit, eros ligula consectetur dui, vitae adipiscing nunc enim eu justo. Donec quis mollis neque. Pellentesque facilisis.</p>
                                <a href="#" class="more fa fa-long-arrow-right"></a>
                            </li>
                            <li>
                                <a class="pic"><i class="fa fa-ambulance"></i></a>
                                <div class="text">
                                    <h2><a href="#">Emergency Departments</a></h2>
                                    <p>Fusce pellentesque lectus quis placerat ultrices. Nunc malesuada est vitae urna laoreet porta. Donec cursus tellus libero, non porttitor felis luctus ut.</p>
                                    <a href="#" class="more fa fa-long-arrow-right"></a>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!--/ services -->  
                </div>


                <div class="grid-row">
                    <!-- doctors carousel -->
                    <section class="widget doctors-carousel doctors">
                        <div class="widget-title">Our Doctors</div>
                        <div id="doctors-carousel" class="owl-carousel">
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
                                </div>
                                <h3><a href="staff-page.html">Dr. Butcher House</a></h3>
                                <p>Ophthomologist</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Brick Wall</a></h3>
                                <p>Dermatologist</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Sno White</a></h3>
                                <p>Neorologist</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Mangle Taleebin</a></h3>
                                <p>Surgeon</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Brick Wall</a></h3>
                                <p>Dermatologist</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Mangle Taleebin</a></h3>
                                <p>Surgeon</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Sno White</a></h3>
                                <p>Neorologist</p>
                            </div>
                            <div class="item">
                                <div class="pic">
                                    <img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
                                    <div class="links">
                                        <ul>
                                            <li><a href="#" class="fa fa-skype"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="staff-page.html">Dr. Butcher House</a></h3>
                                <p>Ophthomologist</p>
                            </div>
                        </div>
                    </section>
                    <!--/ doctors carousel -->
                </div>
                
              



            </main>
            <!--/ page content -->

          

        
@endsection
