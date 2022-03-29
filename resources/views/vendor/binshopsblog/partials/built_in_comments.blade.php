<ul>
                               
                                
                               
                            
@forelse($comments as $comment)



   
        <li>
            <div class="avatar"><i class="fa fa-user"></i>                 
            </div>
             <div class="text">
                <div class="author"><span>{{$comment->author()}}</span> &nbsp; {{$comment->created_at->diffForHumans()}}</div>
                <p>{!! nl2br(e($comment->comment))!!}</p>
            </div>
        </li>
        





@empty
    <div class='alert alert-info'>No comments yet! Why don't you be the first?</div>
@endforelse
</ul>

@if(count($comments)> config("binshopsblog.comments.max_num_of_comments_to_show",500) - 1)
    <p><em>Only the first {{config("binshopsblog.comments.max_num_of_comments_to_show",500)}} comments are
            shown.</em>
    </p>
@endif

