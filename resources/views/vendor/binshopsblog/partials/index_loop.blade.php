{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.binshops.com for how to copy these files to your /resources/views/ directory--}}
{{--https://binshops.binshops.com/laravel-blog-package--}}


                            <div class="item isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                <h3><a href="{{$post->url($locale)}}">{{$post->title}}</a></h3>
                                <div class="date">{{date('d M Y ', strtotime($post->post->posted_at))}}</div>
                                <div class="pic">
                                    <?=$post->image_tag("medium", true, ''); ?>
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{$post->url($locale)}}" class="fa fa-plus"></a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                                 @if (config('binshopsblog.show_full_text_at_list'))
                                    <p>{!! $post->post_body_output() !!}</p>
                                @else
                                    <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
                                @endif
                                <div class="cats">Authored by: </span> {{$post->post->author->name}} </div>
                            </div>
