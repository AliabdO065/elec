<aside class="app-aside app-aside-expand-md app-aside-light">
    <div class="aside-content">
        <header class="aside-header d-block d-md-none">
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="account-icon"><span class="oi oi-caret-bottom"></span></span>
                <span class="account-summary"><span class="account-name">{{ Auth::user()->name }}</span></span>
            </button>
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <div class="pb-3">
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <span class="dropdown-icon"><i class="oi oi-account-logout"></i></span> Logout
                    </a>
                </div>
            </div>
        </header>

        <div class="aside-menu overflow-hidden">
            <nav id="stacked-menu" class="stacked-menu">
                <ul class="menu">
                    <li class="menu-item has-active">
                        <a href="{{ route('dashboard.index') }}" class="menu-link">
                            <span class="menu-icon oi oi-dashboard"></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-item has-child">
                        <a href="{{ route('dashboard.slides') }}" class="menu-link">
                            <span class="menu-icon oi oi-home"></span>
                            <span class="menu-text">Home</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.slides') }}" class="menu-link">Slider</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('dashboard.services.home') }}" class="menu-link">Our
                                    Services</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.about') }}" class="menu-link">About</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('dashboard.category') }}"
                                    class="menu-link">Certificates</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.images.home') }}"
                                    class="menu-link">Images</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.control') }}"
                                    class="menu-link">Participants & Highlights</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.master') }}"
                                    class="menu-link">Masters</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.contact') }}"
                                    class="menu-link">Contact</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.footer') }}"
                                    class="menu-link">Footer</a></li>
                        </ul>
                    </li>

                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-book"></span>
                            <span class="menu-text">About Us</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.about.main') }}" class="menu-link">About
                                    Us</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.about.services') }}"
                                    class="menu-link">Services</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.about.images') }}"
                                    class="menu-link">Images</a></li>
                        </ul>
                    </li>

                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-layers"></span>
                            <span class="menu-text">Services</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.services.main') }}"
                                    class="menu-link">Services Page</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.services') }}"
                                    class="menu-link">Services</a></li>
                        </ul>
                    </li>

                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-people"></span>
                            <span class="menu-text">Participants</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.projects') }}" class="menu-link">All
                                    Participants</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.projects.add') }}" class="menu-link">Add
                                    Participant</a></li>
                        </ul>
                    </li>

                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-document"></span>
                            <span class="menu-text">Highlights</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.news') }}" class="menu-link">All</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('dashboard.news.add') }}" class="menu-link">Add
                                    One</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.news.allcomments') }}"
                                    class="menu-link">Comments</a></li>
                        </ul>
                    </li>

                    <li class="menu-item has-child">
                        <a href="{{ route('dashboard.contact.contact.index') }}" class="menu-link">
                            <span class="menu-icon oi oi-envelope-closed"></span>
                            <span class="menu-text">Contact</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('dashboard.contact.contact.index') }}"
                                    class="menu-link">Contact page</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.contact.contact.allmessage') }}"
                                    class="menu-link">Client's Message</a></li>
                            <li class="menu-item"><a href="{{ route('dashboard.contact.allfeedback') }}"
                                    class="menu-link">Client's Feedback</a></li>
                        </ul>
                    </li>


                    <hr style="border:0; height:4px; background:#333; margin:15px 0; border-radius:2px;">

                   <li class="menu-item">
                        <a href="https://addtext.com/photo/index?bgUrl=https%3A%2F%2Feu8-addtext.ft-uc.com%2Ftmp%2FMjAyNTEwMTM%2Faddtext_com_MTg0ODA1OmV1ODoxNTA0.jpg" 
                        class="menu-link" target="_blank">
                            <span class="menu-icon oi oi-book"></span>
                            <span class="menu-text">Certificates</span>
                        </a>
                    </li>

                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-image"></span>
                            <span class="menu-text">Images</span>
                        </a>
                        <ul class="menu">
                            <li class="menu-item"><a href="https://unsplash.com/s/photos/diving" class="menu-link"
                                    target="_blank">Unsplash Diving</a></li>
                            <li class="menu-item"><a href="https://www.pexels.com/search/diving/" class="menu-link"
                                    target="_blank">Pexels Diving</a></li>
                            <li class="menu-item"><a href="https://pixabay.com/images/search/diving/"
                                    class="menu-link" target="_blank">Pixabay Diving</a></li>
                            <li class="menu-item"><a href="https://www.freepik.com/free-photos-vectors/diving"
                                    class="menu-link" target="_blank">Freepik Diving</a></li>
                            <li class="menu-item"><a href="https://stock.adobe.com/search?k=diving" class="menu-link"
                                    target="_blank">Adobe Stock Diving</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">
                <span class="d-compact-menu-none">Night mode</span> <i class="oi oi-moon ml-1"></i>
            </button>
        </footer>
    </div>
</aside>
