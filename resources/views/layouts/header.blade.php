<header class="site-navbar container py-0 bg-white" role="banner">

    <!-- <div class="container"> -->
    <div class="row align-items-center">

        <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Classy<span class="text-primary">Ads</span>  </a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('locale', ['locale' => 'en']) }}">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('locale', ['locale' => 'ru']) }}">RU</a>
                    </li>
                    <li class="active"><a href={{ url('/') }}>Home</a></li>
                    <li><a href="{{route('ads')}}">Ads</a></li>
                    <li class="has-children">
                        <a href="about.html">About</a>
                        <ul class="dropdown">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">The Leadership</a></li>
                            <li><a href="#">Philosophy</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    {{--@if(!\Illuminate\Support\Facades\Auth::check())--}}
                    @guest
                    <li class="ml-xl-3 login"><a href="{{ route('login') }}"><span class="border-left pl-xl-4"></span>{{__('messages.buttonLogin')}}</a></li>
                    <li><a href="{{ route('register') }}">{{__('messages.Register')}}</a></li>
                    @else
                    <li><a href="">{{__('Profile')}}</a></li>
                     <li>   <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                        </form>
                     </li>
                    @endguest
                    @can('admin')
                        <li><a href={{ url('admin/ad') }}>{{__('Admin Panel')}}</a></li>
                    @endcan

                    <li><a href="{{ route('ads.create') }}" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
                </ul>
            </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>

    </div>
    <!-- </div> -->

</header>
