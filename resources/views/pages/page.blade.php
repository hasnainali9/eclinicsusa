@extends('layouts.app')

@section('content')
<section class="page-title">
    <div class="grid-row clearfix">
        <h1>{{$data->title}}</h1>
        
        <nav class="bread-crumbs">
            <a href="{{route('welcome')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">{{$data->title}}</a>
        </nav>
    </div>
</section>
<main class="page-content">
    {!!urldecode($data->content)!!}
</main>

@endsection