   <nav class="main-nav">
        <ul>
            @foreach ($navbars as $navbarItem)
                <li>
                    <a href="{{$navbarItem->slug}}" class="{{ Request::is($navbarItem->slug) ? 'active' : '' }}"><i class="fa fa-plus"></i>{{$navbarItem->name}}</a>
                     @if(GetNavbarSubmenuFuction($navbarItem->id)->count()>0)
                        <ul>
                            @foreach(GetNavbarSubmenuFuction($navbarItem->id) as $submenu)
                            <li>
                                <a href="{{$submenu->slug}}" class="{{ Request::is($submenu->slug) ? 'active' : '' }}">{{$submenu->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- mobile nav -->
    <nav id="mobile-main-nav" class="mobile-main-nav">
        <i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
        <ul>
            @foreach ($navbars as $navbarItem)
            <li>
                <a href="{{$navbarItem->slug}}" class="{{ Request::is($navbarItem->slug) ? 'active' : '' }}">{{$navbarItem->name}}</a>
                @if($navbarItem->submenu!=0)
                    <ul>
                        @foreach(GetNavbarSubmenuFuction($navbarItem->submenu) as $submenu)
                        <li>
                            <a href="{{$submenu->slug}}" class="{{ Request::is($submenu->slug) ? 'active' : '' }}">{{$submenu->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </nav>
               
    <!--/ mobile nav -->