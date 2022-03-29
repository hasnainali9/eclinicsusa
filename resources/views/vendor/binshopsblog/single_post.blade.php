@extends("layouts.app",['title'=>$post->gen_seo_title()])

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")

<section class="page-title">
                <div class="grid-row clearfix">
                    <h1>{{$post->gen_seo_title()}}</h1>
                    
                    <nav class="bread-crumbs">
                        <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="{{url('/en/blog')}}">Blog</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#">{{$post->gen_seo_title()}}</a>
                    </nav>
                </div>
            </section>


    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

<main class="page-content">
    <div class='grid-row'>
        <div class='grid-col grid-col-9'>

            @include("binshopsblog::partials.show_errors")
            @include("binshopsblog::partials.full_post_details")


            @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <section class="widget comments">   
                            <div class="widget-title">Comments</div>
                             @include("binshopsblog::partials.show_comments")
                            
                        </section>

            @else
                {{--Comments are disabled--}}
            @endif

    </div>
    <div class="grid-col grid-col-3">
        @if (config('binshopsblog.search.search_enabled') )
            @include('binshopsblog::sitewide.search_form')
        @endif
        <section class="widget widget-sevices">
            <div class="widget-title">Categories</div>
            <ul>
               @if($categories)
                        @include("binshopsblog::partials._category_partial", [
    'category_tree' => $categories,
    'name_chain' => $nameChain = ""
    ])
                    @else
                        <span>No Categories</span>
                    @endif
            </ul>
        </section>
    </div>
    </div>
</main>
@endsection

@section('blog-custom-js')
    <script src="{{asset('binshops-blog.js')}}"></script>
@endsection