@extends('layouts.app')

@section('content')
<section class="page-title">
    <div class="grid-row clearfix">
        <h1><i class="{{$data->icon}}"></i> {{$data->title}}</h1>
        
        <nav class="bread-crumbs">
            <a href="{{route('welcome')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">{{$data->title}}</a>
        </nav>
    </div>
</section>
<main class="page-content">
    <div class="grid-row">
                <article class="widget blog-post">	
                    
                    
                    <div class="pic">
                        <img src="http://html.cwsthemes.com/clinico/pic/photo-tour-1.jpg" alt="Nullam euismod commodo">
                    </div>
                    <div class="widget-title">Overview</div>

                    <div class="typography">
                       <p>{{urldecode($data->short_description)}}</p>
                    </div>
                    <br/>
                    <div class="widget-title">Brief</div>

                    <div class="typography">
                       <p>{!!urldecode($data->content)!!}</p>
                    </div>
                
                </article>
    </div>
</main>

@endsection