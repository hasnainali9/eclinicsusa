@if($services->count()>0)
<section class="services">
    <ul>
        @foreach ($services as $service)
            @if($service->status)    
            <li>
                <a class="pic"><i class="{{$service->icon}}"></i></a>
                <h2><a href="#">{{$service->title}}</a></h2>
                <p>{!!urldecode($service->short_description)!!}</p>
                <a href="#" class="more fa fa-long-arrow-right"></a>
            </li>
            @endif
        @endforeach
    </ul>
</section>
@endif