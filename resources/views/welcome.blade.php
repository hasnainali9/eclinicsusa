@extends('layouts.app')

@section('content')

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
                        <nav class="main-nav">
                            <ul>
                                <li>
                                    <a href="index.html" class="active"><i class="fa fa-plus"></i>Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html" class="active">Medical Style</a>
                                            <ul>
                                                <li class="text">
                                                    <h2>Main Campus</h2>
                                                    <hr>
                                                    123 Fashion Avenue<br>New York, MO 265984
                                                    <hr>
                                                    203-284-2818<br>clinico@domain.com
                                                    <a href="#" class="more"><i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="home-news.html">News Style</a></li>
                                        <li><a href="wellness-home.html">Wellness Style</a></li>
                                        <li><a href="home-one-page.html">Home Alternative</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fa fa-plus"></i>Services</a>
                                </li>
                                <li>
                                    <a href="timetable-week.html"><i class="fa fa-plus"></i>Timetable</a>
                                    <ul>
                                        <li><a href="timetable-month.html">Month View</a></li>
                                        <li><a href="timetable-week.html">Week View</a></li>
                                        <li><a href="timetable-list.html">List View</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="news-default.html"><i class="fa fa-plus"></i>News</a>
                                    <ul>
                                        <li><a href="news-four-columns.html">Four columns</a></li>
                                        <li><a href="news-three-columns.html">Three columns</a></li>
                                        <li><a href="news-two-columns.html">Two columns</a></li>
                                        <li><a href="news-full-width.html">Full width</a></li>
                                        <li><a href="news-blog-post.html">Blog post</a></li>
                                    </ul>
                                </li>
                                <li class="right">
                                    <a href="index.html"><i class="fa fa-plus"></i>Features</a>
                                    <ul>
                                        <li><a href="widgets.html">Various widgets</a></li>
                                        <li>
                                            <a href="#">Huge number of pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="locations.html">Locations</a></li>
                                                <li><a href="doctors.html">Our Doctors</a></li>
                                                <li><a href="full-width-page.html">Full-Width Page</a></li>
                                                <li><a href="page-with-sidebar.html">Page with Sidebar</a></li>
                                                <li><a href="page-with-double-sidebar.html">Double Sidebars Page</a></li>
                                                <li><a href="page-404.html">404 Page</a></li>
                                                <li><a href="page-pricing-table.html">Pricing tables</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="feature-unlimited-color.html">Unlimited Color Variations</a>
                                        </li>
                                        <li><a href="responsive_and_retina_ready.html">Retina Ready & Responsive</a></li>
                                        <li><a href="features-accordion.html">Styled Content Items</a></li>
                                    </ul>
                                </li>
                                <li class="right">
                                    <a href="photo-gallery.html"><i class="fa fa-plus"></i>Photo Tour</a>
                                    <ul>
                                        <li>
                                            <a href="photo-four-filter.html">Four columns</a>
                                            <ul>
                                                <li><a href="photo-four-filter.html">With filter</a></li>
                                                <li><a href="photo-four.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="photo-three-filter.html">Three columns</a>
                                            <ul>
                                                <li><a href="photo-three-filter.html">With filter</a></li>
                                                <li><a href="photo-three.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="photo-two-filter.html">Two columns</a>
                                            <ul>
                                                <li><a href="photo-two-filter.html">With filter</a></li>
                                                <li><a href="photo-two.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="photo-one.html">One column</a></li>
                                        <li><a href="photo-single.html">Single item</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contacts.html"><i class="fa fa-plus"></i>Contacts</a>
                                </li>
                            </ul>
                        </nav>
                        <!--/ main nav -->
                        
                        <!-- mobile nav -->
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
                            <ul>
                                <li>
                                    <i></i><a href="index.html" class="active">Home</a>
                                    <ul>
                                        <li>
                                            <i></i><a href="index.html">Medical Style</a>
                                            <ul>
                                                <li class="text">
                                                    <h2>Main Campus</h2>
                                                    <hr>
                                                    <p>123 Fashion Avenue<br>New York, MO 265984</p>
                                                    <hr>
                                                    <p>203-284-2818<br>clinico@domain.com</p>
                                                    <a href="#" class="more fa fa-angle-double-right"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="home-news.html">News Style</a></li>
                                        <li><a href="wellness-home.html">Wellness Style</a></li>
                                        <li><a href="home-one-page.html">Home Alternative</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="services.html">Servives</a>
                                </li>
                                <li>
                                    <i></i><a href="timetable-week.html">Timetable</a>
                                    <ul>
                                        <li><a href="timetable-month.html">Month View</a></li>
                                        <li><a href="timetable-week.html">Week View</a></li>
                                        <li><a href="timetable-list.html">List View</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <i></i><a href="news-default.html">News</a>
                                    <ul>
                                        <li><a href="news-four-columns.html">Four columns</a></li>
                                        <li><a href="news-three-columns.html">Three columns</a></li>
                                        <li><a href="news-two-columns.html">Two columns</a></li>
                                        <li><a href="news-full-width.html">Full width</a></li>
                                        <li><a href="news-blog-post.html">Blog post</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <i></i><a href="index.html">Features</a>
                                    <ul>
                                        <li><a href="widgets.html">Various widgets</a></li>
                                        <li>
                                            <i></i><a href="#">Huge number of pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="locations.html">Locations</a></li>
                                                <li><a href="doctors.html">Our Doctors</a></li>
                                                <li><a href="full-width-page.html">Full-Width Page</a></li>
                                                <li><a href="page-with-sidebar.html">Page with Sidebar</a></li>
                                                <li><a href="page-with-double-sidebar.html">Double Sidebars Page</a></li>
                                                <li><a href="page-404.html">404 Page</a></li>
                                                <li><a href="page-pricing-table.html">Pricing tables</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="feature-unlimited-color.html">Unlimited Color Variations</a>
                                        </li>
                                        <li><a href="responsive_and_retina_ready.html">Retina Ready & Responsive</a></li>
                                        <li><a href="features-accordion.html">Styled Content Items</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <i></i><a href="photo-gallery.html">Photo Tour</a>
                                    <ul>
                                        <li>
                                            <i></i><a href="photo-four-filter.html">Four columns</a>
                                            <ul>
                                                <li><a href="photo-four-filter.html">With filter</a></li>
                                                <li><a href="photo-four.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i></i><a href="photo-three-filter.html">Three columns</a>
                                            <ul>
                                                <li><a href="photo-three-filter.html">With filter</a></li>
                                                <li><a href="photo-three.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <i></i><a href="photo-two-filter.html">Two columns</a>
                                            <ul>
                                                <li><a href="photo-two-filter.html">With filter</a></li>
                                                <li><a href="photo-two.html">Without filter</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="photo-one.html">One column</a></li>
                                        <li><a href="photo-single.html">Single item</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contacts.html">Contacts</a>
                                </li>
                            </ul>
                        </nav>
                        <!--/ mobile nav -->
                    </div>
                </div>
            </header>
            <!--/ page header -->
            
            <!-- quick search -->
            <form id="quick-search" class="quick-search">
                <fieldset>
                    <legend>Quick Search:</legend>
                    
                    <input type="text" placeholder="Search by name" id="docname" name="docname" class="ui-autocomplete-input" autocomplete="off">
                    
                    <select>
                        <option value="0">Speciality</option>
                        <option value="1">Ophthomologist</option>
                        <option value="2">Dermatologist</option>
                        <option value="3">Neorologist</option>
                        <option value="4">Surgeon</option>
                    </select>
                    
                    <select>
                        <option value="0">Locations</option>
                        <option value="1">Primary Health Care</option>
                        <option value="2">Gynaecological Clinic</option>
                        <option value="3">Diagnosis With Precise</option>
                        <option value="4">Cardiac Clinic</option>
                        <option value="5">General Surgery</option>
                    </select>
                    
                    <button type="submit">Search</button>
                    <div class="switcher">
                        <button id="quick-search-switcher" type="button">Find a doctor</button>
                    </div>
                </fieldset>             
            </form>
            <!--/ quick search -->

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
                
                <div class="grid-row">
                    <div class="grid-col grid-col-4">
                        <!-- departments -->
                        <section class="widget widget-departments">
                            <div class="widget-title">Departments</div>
                            <dl>
                                <dt><i class="fa fa-medkit"></i>Primary Health Care</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-user-md"></i>Gynaecological Clinic</dt>
                                <dd>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-stethoscope"></i>Diagnosis With Precise</dt>
                                <dd>Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-heart"></i>Cardiac Clinic</dt>
                                <dd>Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt><i class="fa fa-scissors"></i>General Surgery</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                                <dt class="opened"><i class="fa fa-wheelchair"></i>Rehabilitation Studio</dt>
                                <dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-clock-o"></i> TIMETABLE</a></dd>
                            </dl>
                        </section>
                        <!--/ departments -->
                    </div>
                    
                    <div class="grid-col grid-col-4">
                        <!-- sevices -->
                        <section class="widget widget-sevices">
                            <div class="widget-title">Our Medical Services</div>
                            <ul>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiothoracic Surgery</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiovascular Diseases</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ophthalmology</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dermatology</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General Surgery</a></li>
                                <li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Consultative & Diagnostic</a></li>
                            </ul>
                        </section>
                        <!--/ sevices -->
                    </div>
                    
                    <div class="grid-col grid-col-4">
                        <!-- appointment -->
                        <section class="widget widget-appointment">
                            <div class="widget-title">Make an Appointment</div>
                            <form action="php/contact-send.php" id="contactform">
                                <fieldset>
                                    <div class="row">
                                        <input type="text" placeholder="Full Name" name="name">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="row">
                                        <input type="tel" placeholder="Phone Number" name="phone">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="row">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="row">
                                        <input type="text" placeholder="Appointment Date" name="date">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="row">
                                        <textarea cols="30" rows="5" placeholder="Message" name="message"></textarea>
                                        <i class="fa fa-align-left"></i>
                                    </div>
                                    <div class="clearfix captcha">
                                        <button type="submit" class="button" value="Submit">Send Message</button>
                                    </div>
                                </fieldset>
                            </form>
                        </section>
                        <!--/ appointment -->   
                    </div>
                </div>
            </main>
            <!--/ page content -->

            <!-- page footer -->
            <footer class="page-footer">
                <a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
                
                <div class="grid-row">
                    <div class="grid-col grid-col-3">
                        <!-- last news -->
                        <section class="widget-alt last-news">
                            <div class="widget-icon"></div>
                            <div class="widget-title">Clinico</div>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
                                <li>Donec quis condimentum leo, et congue dolor. Integer auctor facilisis odio. Duis vitae nibh tristique, consectetur lacus a, facilisis rutrum enim.</li>
                                <li>Cras fermentum interdum dapibus. Maecenas imperdiet, consectetur adipiscing magna nec odio cursus, vitae consequat ante.</li>
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
        
@endsection
