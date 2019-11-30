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
               
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                background:url("/images/slide_2.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                
                
            }
         .top-right{
           text-align:right;
         }  
         .links > a {
                color:white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        .container{
     
        }
         
        .c-logo{
           font-size:60px;
           color:white;
           font-weight:bold;
          margin-left:auto;
          margin-right:auto;
            margin-top:300px;
        }
        .button-flex{
            display:flex;
            margin-top:70px;
        }
        .logo-flex{
            display:flex;
        }
        .button-flex-item{
            display:block; 
            width:200px; 
            height:50px; 
            line-height:40px; 
            border:1px #00ffbf solid;; 
            margin:15px auto; 
            background-color:#00ffbf; 
            text-align:center; 
            cursor: pointer; 
            color:white; 
            font-weight:bold;
            transition:all 0.9s, color 0.3;
            border-radius:24px;
            
        }
        .button-flex-item:hover{
            box-shadow: 0 80px 0 0 rgba(0,0,0,0.25) inset, 
            0 -80px 0 0 rgba(0,0,0,0.25) inset;
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
                   <div class="logo-flex">
                   <a class="c-logo">This is unique shoes shop</a>
                   </div>
                   <div class="button-flex">
                   <button class="button-flex-item hover">SHOP</button>
                   <button class="button-flex-item hover" onclick = "location.href = '/board'">F/Q</button>
                   <button class="button-flex-item hover">UBOUT</button>
                   </div>
                
		   		</div>
        </div>
    </body>
</html>