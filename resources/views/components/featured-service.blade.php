@if($featuredServices->count()>0)
<section class="benefits">
    <ul>
    @foreach ($featuredServices as $service)
        <li>
            <div class="pic"><i class="{{$service->icon}}"></i></div>
            <div class="text">
                <h2>{{$service->title}}</h2>
                <p>{!!urldecode($service->short_description)!!}</p>
                <a href="#" class="more"></a>
            </div>
        </li>
    @endforeach
    </ul>
</section>
@endif