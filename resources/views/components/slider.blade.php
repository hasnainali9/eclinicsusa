<!-- slider -->
@if($sliders->count()>0)
<div class="slider-wrapper">
    <section class="slider" id="slider">
        @foreach($sliders as $slide)
        <div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">                    
            <img src="{{url('/')}}{{$slide->description}}" alt="" class="ls-bg">
            
            <div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
                <span class="icon fa fa-heart"></span>
                <h2>{{$slide->title}}</h2>
                <p>{{$slide->description}}</p>
                <div class="buttons">
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
                    --><!--
                    --><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach

    </section>
</div>
@endif
<!--/ slider -->