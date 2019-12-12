
    <header id="header" data-transparent="false" class="white">
        <div class="header-inner">
            <div class="container">

                <div id="logo">
                    <a href="{{ asset('/') }}" class="logo" data-src-dark="{{ asset('public/img/naatlogo.png') }}">
                        <img src="{{ asset('public/img/naatlogo.png') }}" alt="NAAT Logo">
                    </a>
                </div>
                {{--<div id="search">--}}
                    {{--<div id="search-logo"><img src="{{ asset('public/img/naatlogo.png') }}" alt="Polo Logo"></div>--}}
                    {{--<button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></button>--}}
                    {{--<form class="search-form" action="http://www.inspirothemes.com/polo/search-results-page.html" method="get">--}}
                        {{--<input class="form-control" name="q" type="search" placeholder="Search..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />--}}
                        {{--<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>--}}
                    {{--</form>--}}
                    {{--<div class="search-suggestion-wrapper">--}}
                        {{--<div class="search-suggestion">--}}
                            {{--<h3>News Articles</h3>--}}
                            {{--<p><a href="#">Beautiful nature, and rare feathers!</a></p>--}}
                            {{--<p><a href="#">New costs and rise of the economy!</a></p>--}}
                            {{--<p><a href="#">A true story, that never been told!</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="search-suggestion">--}}
                            {{--<h3>Looking for these?</h3>--}}
                            {{--<p><a href="#">New costs and rise of the economy!</a></p>--}}
                            {{--<p><a href="#">AI can be trusted to take answer calls </a></p>--}}
                            {{--<p><a href="#">Polo now lets you easily create any beautiful clean website</a></p>--}}
                        {{--</div>--}}
                        {{--<div class="search-suggestion">--}}
                            {{--<h3>Blog Posts</h3>--}}
                            {{--<p><a href="#">A true story, that never been told!</a></p>--}}
                            {{--<p><a href="#">Beautiful nature, and rare feathers!</a></p>--}}
                            {{--<p><a href="#">The most happiest time of the day!</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="header-extras">--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a id="btn-search" href="#"> <i class="icon-search1" style="color: black;"></i></a>--}}

                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

                <div id="mainMenu-trigger">
                    <button class="lines-button x"> <span class="lines"></span> </button>
                </div>


                <div id="mainMenu" class="menu-uppercase">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="{{ asset('/') }}">Home</a></li>
                                <li class="dropdown"> <a href="#">About<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li style="color: black;"><a href="{{ route('about') }}">Why we?</a></li>
                                        <li style="color: black;"><a href="{{ route('about.who') }}">Who are we?</a></li>
                                        <li style="color: black;"><a href="{{ route('about.mission') }}">Mission and Vision</a></li>
                                        <li style="color: black;"><a href="{{ route('about.message') }}">Message from Managing Director</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="#">Training<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li style="color: black;"><a href="{{ route('cabincrew') }}">Cabin Crew Training</a></li>
                                        <li style="color: black;"><a href="{{ route('airport') }}">Airport Ground Handling</a></li>
                                        <li style="color: black;"><a href="{{ route('plot') }}">Pilot Training</a></li>
                                        <li style="color: black;"><a href="{{ route('aircraft') }}">Aircraft Maintenance Engineering</a></li>
                                    </ul>
                                </li>

                                <li> <a href="{{ route('events') }}">News and Notices</a>
                                </li>
                                <li> <a href="{{ route('front.gallery') }}">Gallery</a>
                                </li>
                                <li> <a href="{{ route('front.contact') }}">Contact</a>
                                </li>
                                <li> <a href="{{ route('faq') }}">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </header>

