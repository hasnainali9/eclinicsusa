<section class="widget add-comment">    
                            <div class="widget-title">Leave a Comment</div>
                            
                            <form method='post' action='{{route("binshopsblog.comments.add_new_comment",[app('request')->get('locale'),$post->slug])}}'>
                                @csrf
                                <textarea
                                class="form-control"
                                name='comment'
                                required
                                id="comment"
                                placeholder="Write your comment here"
                                rows="7">{{old("comment")}}</textarea>
                                 @if(config("binshopsblog.comments.save_user_id_if_logged_in", true) == false || !\Auth::check())

         
                            <input
                                    type='text'
                                    class="form-control"
                                    name='author_name'
                                    id="author_name"
                                    placeholder="Your name"
                                    required
                                    value="{{old("author_name")}}">
            

                    @if(config("binshopsblog.comments.ask_for_author_email"))
                 
                                <input
                                        type='email'
                                        class="form-control"
                                        name='author_email'
                                        id="author_email"
                                        placeholder="Your Email"
                                        required
                                        value="{{old("author_email")}}">
           
                    @endif
                @endif


                @if(config("binshopsblog.comments.ask_for_author_website"))
                            <input
                                    type='url'
                                    class="form-control"
                                    name='author_website'
                                    id="author_website"
                                    placeholder="Your Website URL"
                                    value="{{old("author_website")}}">
        
                @endif
                                <button type="submit" class="button">Post comment</button>
                            </form>
                        </section>







