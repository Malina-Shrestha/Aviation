<div class="sidebar" data-color="purple" data-image="{{ asset('public/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ asset('/') }}" class="simple-text">
                    Aviation
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ route('admin.home') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="pe-7s-add-user"></i>
                        <p>User</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('events.index') }}">
                        <i class="pe-7s-display1"></i>
                        <p>Events</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('galleries.index') }}">
                        <i class="pe-7s-albums"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contactqueries.index') }}">
                        <i class="pe-7s-comment"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimonials.index') }}">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                {{--<li>--}}
                    {{--<a href="subscribe.html">--}}
                        {{--<i class="pe-7s-news-paper"></i>--}}
                        {{--<p>Subscribers</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ asset('dashboard.logout') }}">
                            <i class="pe-7s-angle-left"></i>
                            <p>Logout</p>
                        </a>
                </li>
            </ul>
        </div>
    </div>
