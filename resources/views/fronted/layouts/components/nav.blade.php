
        <a class="menu-toggle">
            <span class="lines"></span>
        </a> 

        <div class="nav-menu">
            <ul id="menu-main-menu" class="" style="color: #1f416a;font-size: 16px;font-weight: bold;">
                <li class="menu-item {{ request()->routeIs('fronted.index') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.index') }}">Home</a>
                </li>
                <li class="menu-item {{ request()->routeIs('fronted.about') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.about') }}">About Us</a>
                </li>
                <li class="menu-item {{ request()->routeIs('fronted.services') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.services') }}">Services</a>
                </li>
                <li class="menu-item {{ request()->routeIs('fronted.project*') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.projects') }}">Participants</a>
                </li>
                <li class="menu-item {{ request()->routeIs('fronted.news*') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.news') }}">Highlights</a>
                </li>
                <li class="menu-item {{ request()->routeIs('fronted.contact') ? 'current-menu-item' : '' }}">
                    <a href="{{ route('fronted.contact') }}">Contact</a>
                </li>
            </ul> 
        </div>
        
        {{-- <a class="search-toggle toggle-link"></a> --}}
