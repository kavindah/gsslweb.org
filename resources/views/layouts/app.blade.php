<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="GSSL" content="geologicl society of sri lanka">
    <meta name="GSSL-soil" content="soil Economic Geology Oceanography Gemology Environmental Geology Sedimentology Geophysics">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Geological Society of Sri Lanka') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{asset('siteimages/logo.jpg')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
            error_reporting(E_ALL);
ini_set("display_errors", 1);
error_reporting(-1);
    </script>
</head>
<body>
    <div class="row" style="background-color: #ffffff;height: auto;padding: 20px;width: 100%;margin: 0 2.5px 0 2.5px ;background-image: url({{url('siteimages/homeback.jpg')}});">
        <!-- background-image: url('siteimages/back.jpg'); -->

        <div class="col-md-2 p-0 m-0"><a href="/"><img src="{{asset('siteimages/logonew.png')}}" width="90%" class="navlogo"></a></div>
        <div class="col-md-2 p-0 m-0"><div class="gssl">GSSL</div></div>
        <div class="col-md-6 p-0 m-0"> <div class="webtext">Geological Society of Sri Lanka</div></div>

        
    </div>

    <hr style="margin: 0;padding: 0;">
    
    <div id="app" style="margin-bottom: 0">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-bottom: 0;">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li><a  href="{{url('/')}}" class="custom-active {{ request()->is('/') ? 'active' : '' }}">Home</a></li>

                            <li><a  href="{{url('article_published')}}" class="custom-active {{ request()->is('article_published') ? 'active' : '' }}">Articles</a></li>

                             <li><a href="{{url('news')}}" class="custom-active {{ request()->is('news') ? 'active' : '' }}">News</a></li>

                             <li><a href="{{url('general_public')}}" class="custom-active {{ request()->is('general_public') ? 'active' : '' }}">General Public</a></li>

                            <li><a href="{{url('publications')}}" class="custom-active {{ request()->is('publications') ? 'active' : '' }}">Publications</a></li>

                            <li><a href="{{url('activities_home')}}" class="custom-active {{ request()->is('activities_home') ? 'active' : '' }}">Activities</a></li>

                            <li><a href="/journalgssl" class="custom-active {{ request()->is('journalgssl') ? 'active' : '' }}" data-toggle="tooltip" title="Journal of geological Society of Sri Lanka" data-placement="bottom">JGSSL</a></li>

                            <li><a href="/sleso" class="custom-active {{ request()->is('sleso') ? 'active' : '' }}" data-toggle="tooltip" title="Sri Lanka Earth Science Olympiad Committee" data-placement="bottom">SLESO</a></li>

                            <li><a href="/awards" class="custom-active {{ request()->is('awards') ? 'active' : '' }}">Awards</a></li>

                            <li><a href="/annual_session" class="custom-active {{ request()->is('annual_session') ? 'active' : '' }}" data-toggle="tooltip" title="Annual Sessions" data-placement="bottom">AS</a></li>

                            <li><a href="/excom" class="custom-active {{ request()->is('excom') ? 'active' : '' }}" data-toggle="tooltip" title="Executive committee" data-placement="bottom">EC</a></li>

                            <li><a href="/members" class="custom-active {{ request()->is('members') ? 'active' : '' }}">Members</a></li>

                            <li><a href="/contact_us" class="custom-active {{ request()->is('contact_us') ? 'active' : '' }}">Contact us</a></li>
  
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="custom-active {{ request()->is('login') ? 'active' : ''}} " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li><!--
                            <li class="nav-item">
                                <a class="nav-link" style="display: none;" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="custom-active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="/home">
                                      Dashboard
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
