@if($subServices->count()>0)
<section class="widget doctors-carousel doctors">
    <div class="widget-title">Associate Medical Services</div>
    <div id="doctors-carousel" class="owl-carousel">
        @foreach ($subServices as $service)
        @if($service->status)
        <div class="item">
            <div class="pic">
                <img src="{{$service->image}}" width="270" height="270" alt="{{$service->title}}">
            </div>
            <h3><a href="javascript:;">{{$service->title}}</a></h3>
            <p>{{urldecode($service->short_description)}}</p>
        </div>
        @endif
        
        @endforeach
    </div>
</section>
@endif