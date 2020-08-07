<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('costem_asset/bootstrap') }}/css/sb-admin-2.css">
            <style>

             body header .home:before{
                    background-color: lightblue;
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 0%;
                    transition: .5s;
                    z-index: -1;
                    display: block;
                    text-transform: uppercase;
               }
               body header .home:hover:before{
                   height: 100%;

               }

               body header .log:before{
                    background-color: rgb(225, 241, 247);
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 0%;
                    transition: .5s;
                    z-index: -1;
                    display: block;
                    text-transform: uppercase;
               }
               body header .log:hover:before{
                   height: 100%;

               }

               body header .sign:before{
                    background-color: rgb(251, 253, 253);
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 0%;
                    transition: .5s;
                    z-index: -1;
                    display: block;
                    text-transform: uppercase;
               }
               body header .sign:hover:before{
                   height: 100%;

               }
            </style>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body style=" background-image: url({{ asset('costem_asset/bootstrap') }}/try.jpg); background-size: cover;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost:8000">
                    <label for="" style="font-weight: bold; "><i style="font-size: 30px;">F</i>iwore</label>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                                                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                                                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                                @endauth
                                @endif
                                                                        </ul>
                </div>
            </div>
        </nav>

           {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

{{--
        <nav class="navbar navbar-expand-lg navbar-light bg-lightblue">
            <a class="navbar-brand" href="#" style="font-weight: bold;"><i style="font-size: 40px;">F</i>iwore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
              <ul class="navbar-nav">
                <li class="nav-item active">
                    <div class="home">
                        <a class="nav-link" href="index.html" style="color: black; " >Home <span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <div class="log" id="log">
                <li class="nav-item" >
                    <a class="nav-link" href="http://localhost:8000/login" style="color: black;">Login</a>
                </li>
            </div>
            <div class="sign">
                 <li class="nav-item ">
                  <a class="nav-link" href="http://localhost:8000/register" style="color: black;">Register</a>
                </li>
            </div>
              </ul>
            </div>
          </nav>
 --}}

    </body>



            {{-- <header> --}}
                {{-- <nav class="navbar navbar-expand-lg navbar-light bg-lightblue">
                    <a class="navbar-brand" href="#" style="font-weight: bold;"><i style="font-size: 40px;">F</i>iwore</a>

                    <div class="collapse navbar-collapse" id="navbarNav" >
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                            <div class="home">
                                <a class="nav-link" href="index.html" style="color: black;" >Home <span class="sr-only">(current)</span></a>
                            </div>
                        </li>
                        <div class="log">
                        <li class="nav-item" >
                          <a class="nav-link" href="login.html" style="color: black;">Log in</a>
                        </li>
                    </div>
                    <div class="sign">
                         <li class="nav-item ">
                          <a class="nav-link" href="sign.html" style="color: black;">Sign up</a>
                        </li>
                    </div>
                    <div>
                      <button class="navbar-toggler-icon" style="position: absolute; right: 10px; top: 5px;"></button>
                    </div>
                      </ul>
                    </div>
                  </nav>
            </header> --}}

        {{-- </body> --}}

            {{-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body> --}}
</html>
