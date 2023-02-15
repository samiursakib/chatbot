<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .nav-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            list-style-type: none;
        }

        .nav-list a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
            transition: all 0.2s ease-in-out;
        }

        .nav-list a:hover {
            background-color: #fff;
            color: #333;
            border-radius: 25px;
        }

        .dashboard {
            font-family: sans-serif;
            color: #ddd;
            font-size: 30px;
            font-weight: 100;
        }

        .logout-btn {
            border: 1px solid #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @guest
                    @else
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li><span class="dashboard">Dashboard</span></li>
                        <li class="nav-item">
                            <a class="nav-list logout-btn" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                        </li>        
                        <form style="display: none;" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                    @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
