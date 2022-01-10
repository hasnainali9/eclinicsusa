@extends('layouts.app')

@section('content')
<!-- page title -->
<section class="page-title">
    <div class="grid-row clearfix">
        <h1>Contacts</h1>
        
        <nav class="bread-crumbs">
            <a href="{{route('welcome')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">Contacts</a>
        </nav>
    </div>
</section>
<!--/ page title -->

<!-- page content -->
<main class="page-content">
    
    <div class="grid-row">
        <div class="grid-col grid-col-9">
            <!-- feedback -->
            <article class="feedback">
                <div class="widget-title">Get in Touch with Us by filling the form below</div>
                            
                <p>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere. Nam elementum elit eget tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut. Pellentesque tempus vehicula lectus eget tempor. Donec suscipit enim dui, ut sagittis orci rhoncus id.</p>
                
                <form action="{{route('contact.store')}}" id="contactform" method="POST">
                    @csrf
                    <fieldset>
                        <div class="clearfix">
                            <div class="input">
                                <label>Your name:</label>
                                <input type="text" name="name">
                            </div>
                            <div class="input">
                                <label>Your email:</label>
                                <input type="text" name="email">
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="input">
                                <label>Service:(if any required)</label>
                                <input type="text" name="service">
                            </div>
                            <div class="input">
                                <label>Subject:</label>
                                <input type="text" name="subject">
                            </div>
                        </div>
                        <label>Message:</label>
                        <textarea rows="6" name="message"></textarea>
                        <div class="clearfix captcha">
                                <button type="submit" class="button" value="Submit">Submit</button>
                                
                        </div>
                    </fieldset>
                </form>							
            </article>
            <!--/ feedback -->
        </div>
        
        <div class="grid-col grid-col-3">						
            <!-- contacts -->
            <section class="widget widget-contacts">
                <div class="widget-title">Contact Details</div>
                <dl>
                    <dt class="opened"></dt>
                    <dd>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>{!!urldecode(GetSettingData('web_address'))!!}</li>
                            <li><i class="fa fa-phone"></i>Call us: {{GetSettingData('web_phone_no')}}</li>
                            <li><i class="fa fa-envelope"></i>E-mail: {{GetSettingData('web_footer_email')}}</li>
                        </ul>
                    </dd>
                </dl>
            </section>
            <!--/ contacts -->
            
            <!-- follow -->
            <section class="widget widget-follow">
                <ul>
                    <li><a href="#"><i class="fa fa-rss"></i>150<br>Subscribers</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i>5560<br>Fans</a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i>2300<br>Followers</a></li>
                </ul>
            </section>
            <!--/ follow -->
        </div>
    </div>
</main>
<!--/ page content -->
@endsection