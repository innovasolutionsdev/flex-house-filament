<header class="header-section bg-black">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
{{--                <img src="img/logo.png" alt="">--}}
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="./index.html">Home</a></li>
                    <li><a href="./about-us.html">About</a></li>
                    <li><a href="./classes.html">Services</a></li>
                    <li><a href="./classes.html">Packages</a></li>
                    <li><a href="./classes.html">Classes</a></li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./contact.html">Contacts</a></li>
                    <li>
                    @if (Auth::check())
                        <a href="{{url('user')}}" >Dashboard</a>

                    @else
                             <a href="{{url('login')}}">Login</a>
                    </li>
                </ul>
            </nav>
            <a href="{{url('register')}}" class="primary-btn signup-btn">Sign Up Today</a>
            @endif
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
