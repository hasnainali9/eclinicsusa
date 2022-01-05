@extends('layouts.app')

@section('content')

            <x-slider/>
            
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
                    <!-- Subservices carousel -->
                    <x-sub-services/>
                    <!--/ Subservices carousel -->
                </div>
                
              



            </main>
            <!--/ page content -->

          

        
@endsection
