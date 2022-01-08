@extends('layouts.app')

@section('content')

            <x-slider/>
            
            <!-- page content -->
            <main class="page-content">
                <div class="grid-row">
                    <!-- benefits -->
                    <x-featured-service/>
                    <!--/ benefits -->
                </div>
                
                <div class="grid-row">
                    <!-- services -->
                    <x-services/>
                    <!--/ services -->  
                </div>


                <div class="grid-row">
                    <!-- Subservices carousel -->
                    <x-sub-services/>
                    <!--/ Subservices carousel -->
                </div>

                <div class="grid-row">
                    <!-- Testimonials carousel -->
                    <x-testimonial/>
                    <!--/ Testimonials carousel -->
                </div>
                
              



            </main>
            <!--/ page content -->

          

        
@endsection
