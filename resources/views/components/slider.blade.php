<!-- slider -->

@if($sliders->count()>0)
<style>
    .prev {
        border-top-left-radius: 50%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }
    .next {
        border-top-right-radius: 50%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }
    
</style>
<div class="slider-wrapper">
    <section class="slider" id="slider">
        @foreach($sliders as $key=>$slide)
            @if($slide->status)
        
            @php
             if(($key+1) % 2 == 0){
               $even=true; 
            }
            else{
                $even=false; 
            }    
            @endphp
            <div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">                    
                <img src="{{urldecode($slide->image)}}" alt="" class="ls-bg">
                
                <div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style=" left:80%;top:35%; background:{{$even===true?'#18333F':'white'}}!important;">
                    <h2 style="color:{{$even===true?'white':'#18323f'}}!important;"><span>{{$slide->title}}</span></h2>
                    <p>{!!urldecode($slide->description)!!}</p>
                    <div class="buttons">
                        <a href="#" class="prev" style=" border-color: {{$even===true?'white':'#0086C5'}}!important; color: {{$even===true?'#0086C5':'white'}}!important;background: {{$even===true?'white':'#0086C5'}}!important;"><i class="fa fa-angle-left"></i></a><!--
                        --><!--
                        --><a href="#" class="next" style="border-color: {{$even===true?'white':'#0086C5'}}!important;color: {{$even===true?'#0086C5':'white'}}!important;background: {{$even===true?'white':'#0086C5'}}!important;"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

    </section>
</div>
@endif
<!--/ slider -->