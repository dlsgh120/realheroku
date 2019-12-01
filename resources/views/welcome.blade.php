@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
          html, body { 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                background:url("/images/slide_2.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                
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
        .bottom{
        
        }
        </style>
    </head>
    <body>
        <div>
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                       
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          -->
		   		<div class="container">
                   <div class="logo-flex">
                   <div class="c-logo">This is unique shoes shop</div>
                   </div>
                   <div class="button-flex">
                   <button class="button-flex-item hover">SHOP</button>
                   <button class="button-flex-item hover" onclick = "location.href = '/board'">F/Q</button>
                   <button class="button-flex-item hover" onclick = "location.href = '/about'">UBOUT ME</button>
                   </div>
                
		   		</div>
        </div>
      
       <div class ="bottom"> 
       
       </div>
    </body>
</html>
@endsection

<div>
</div>