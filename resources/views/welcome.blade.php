<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }
         .top-right{
           text-align:right;
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
        .container{
            background:url("/slide_2.jpg");
            height:700px;
            border:solid 1px;
        }
         
        .c-logo{
           font-size:60px;
           color:white;
           font-weight:bold;
           margin-top:auto;
           margin-bottom:auto;
        }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
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
            @endif
         
		   		<div class="container">
		   		<div class="c-logo">Take Your Business To The Next Level</div>
		   		<p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
		   		</div>
        </div>
    </body>
</html>