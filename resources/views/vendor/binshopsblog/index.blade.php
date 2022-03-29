@extends("layouts.app",['title'=>$title])

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")






<section class="page-title">
                <div class="grid-row clearfix">
                    <h1>Blog</h1>
                    
                    <nav class="bread-crumbs">
                        <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#">Blog</a>
                    </nav>
                </div>
            </section>








<main class="page-content">
                <div class="grid-row">                  
                    <!-- news -->
                    <section id="news" class="widget news news-3">                      
                        <div class="grid isotope" style="position: relative; overflow: hidden; height: 1083px;">
                
                            @forelse($posts as $post)
                            @include("binshopsblog::partials.index_loop")
                        @empty
                            <div class="col-md-12">
                                <div class='alert alert-danger'>No posts!</div>
                            </div>
                        @endforelse

                        </div>


    

                    </section>
</div>
</main>
@endsection
