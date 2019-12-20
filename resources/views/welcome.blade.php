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
                /* background:url("/images/slide_2.jpg"); */
                background-repeat:no-repeat;
                background-attachment:fixed;
                
            }
        
         
        .c-logo{
           font-size:60px;
           color:white;
           font-weight:bold;
           text-align:center;
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
        .menubar{
            display:flex;
            border:none;
            border-top:1px solid #e5e5e5;
           
            /* background-color:#00ffbf; */
        }
        .menubar ul{
            /*background: rgb(109,109,109);*/

            height:50px;
            list-style:none;
            margin:0;
            padding:0;
            margin-left:auto;
            margin-right:auto;
            }

            .menubar li{
            float:left;
            padding:0px;
            }

            .menubar li a{
            color: black;
            font-size: 16px;
            display:block;
            line-height:50px;
            margin:0px;
            padding:0px 25px;
            text-align:center;
            text-decoration:none;
            }

            .menubar li a:hover, .menubar ul li:hover a{
            /* background: rgb(71,71,71); */
            font-weight:bold;
            color:black;
            text-decoration:none;
            }

            .menubar li ul{
            /* background: rgb(109,109,109); */
            
            display:none; /* 평상시에는 드랍메뉴가 안보이게 하기 */
            height:auto;
            padding:0px;
            margin:0px;
            border:0px;
            position:absolute;
            width:200px;
            z-index:200;
            /*top:1em;
            /*left:0;*/
            }

            .menubar li:hover ul{
            display:block; /* 마우스 커서 올리면 드랍메뉴 보이게 하기 */
            }

            .menubar li li {
            /* background: rgb(109,109,109); */
            display:block;
            float:none;
            margin:0px;
            padding:0px;
            width:200px;
            }

            .menubar li ul a{
            display:block;
            height:50px;
            font-size:13px;
            font-style:normal;
            margin:0px;
            padding:0px 10px 0px 15px;
            text-align:left;
            }

            .menubar li ul a:hover, .menubar li ul li:hover a{
            font-size:14px;
            font-weight:bold;
            text-decoration:none;
            }
            .menubar p{
            clear:left;
            }

            .main{
                margin-top:100px;
                display:flex;
                margin-left:15%;
                margin-right:15%;
             
            }
            .main-flex{
                display:flex;
              
                margin-left:auto;
                margin-right:auto;
            }
            .table{
                margin-left:20px;
                width:400px;
                height:300px;
                border:1px solid #e5e5e5;
                
            }
            .bottom{
                border:1px solid;
            }
            .logo{
           
                padding-top:150px;
                padding-bottom:250px;
                background-image: url( "images/1728295469.jpg" );
                background-repeat:no-repeat;
                background-size:cover;
                margin-left:5px;
                margin-right:5px;
            }

            .bottoms{
                background-color: black;
                color:#fff;
                display: flex;
                margin-top: 100px;
                
                }
                .bottom-item{
                /*text-align: center;*/
                margin-top: 50px;
                width: 300px;
                height: 200px;
                border: 1px solid black;
                margin-left: 10px;
                font-size:13px;
                font-weight:bold;
                }
                .bottom-center-item{
                display: flex;
                margin-left: auto;
                margin-right: auto;
                }
               
                .bottom-margin{
                margin-top: 10px;
                }
               
                .best-item-name{
                margin-top: 20px;
                margin-left: 20px;
                font-size: 23px;
                color: #111;
                font-weight: bold;
                }
                .bottoms a{
                    color:gray;
                    font-size:12px;
                }
                .show-more{
                    margin-left:60%;
                    font-size:14px;
                    color:black;
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
		   		<!-- <div class="container">
                   <div class="logo-flex">
                   <div class="c-logo">This is unique shoes shop</div>
                   </div>
                   <div class="button-flex">
                   <button class="button-flex-item hover" onclick = "location.href = '/main'">MAIN</button>
                   <button class="button-flex-item hover" onclick = "location.href = '/board'">F/Q</button>
                   <button class="button-flex-item hover" onclick = "location.href = '/about/1'">UBOUT ME</button>
                   </div>
                
		   		</div> -->
             </div>

             <div class="menubar">
             <ul>
                <li><a href="/main">MAIN</a>
                    <ul>
                        <li><a href="/main">BUY/SELL</a></li>
                        <li><a href="/share">SHARE</a></li>
                    </ul>
                </li>
                <li><a href="/board">F/Q</a>
                    <ul>
                        <li><a href="/board">F/Q</a></li>
                    </ul>
                </li>
                <li><a href="/notice">NOTICE</a>
                    <ul>
                        <li><a href="/notice">NOTICE</a></li>
                    </ul>
                </li>
                <li><a href="/about/1">UBOUT ME</a>
                    <ul>
                        <li><a href="/about/1">HOMEPAGEINFO</a></li>
                        <li><a href="/about/2">MYINFO</a></li>
                    </ul>
                </li>
             </ul>
             </div>

            <div class="logo">
                <div class="c-logo">This is unique shoes shop</div>
            </div>

      <div class="main">
        <div class="main-flex">
                <table class="table table:hover">
                    <tr>
                        <td style="border:3px solid #e5e5e5;"><a style="font-weight:bold;">사고/팔기</a><a class="show-more" href="/main">+더보기</a></td>
                    </tr>
                    @foreach($mains as $main)
                    <tr>
                       <td style="font-size:13px;"><a href="/main/read/{{$main->id}}" style="color:black;">{{'- '.$main->title}}</a></td>
                      
                    </tr>
                    @endforeach
                </table>    
        

                <table class="table table:hover">
                    <tr>
                         <td style="border:3px solid #e5e5e5;"><a style="font-weight:bold;">자유게시판</a><a class="show-more" href="/board">+더보기</a></td>
                    </tr>
                    @foreach($boards as $board)
                       <tr>
                         <td style="font-size:13px;"><a href="/board/read/{{$board->id}}" style="color:black;">{{'- '.$board->title}}</a></td> 
                       </tr>
                    @endforeach
                </table>    
          
                <table class="table table:hover">
                    <tr>
                        <td style="border:3px solid #e5e5e5;"><a style="font-weight:bold;">공지사항</a><a class="show-more" href="/notice">+더보기</a></td>
                    </tr>
                    @foreach($notices as $notice)
                       <tr>
                         <td style="font-size:13px;"><a href="/notice/read/{{$notice->id}}" style="color:black;">{{'- '.$notice->title}}</a></td> 
                       </tr>
                    @endforeach
                </table>    
            </div>
      </div>

      <div class="bottoms">
    <div class="bottom-center-item">
  <div class="bottom-item">
   
      <div class="bottom-margin">안내</div>
      <div class="bottom-margin"><a href="/login">로그인</a></div>
      <div class="bottom-margin"><a href="/register">회원가입</a></div>
 
  </div>

  <div class="bottom-item">
    <div class="bottom-margin">고객센터</div>
    <div class="bottom-margin"><a href="">010-5288-3923</a></div>
    <div class="bottom-margin"><a href="/notice">공지사항</a></div>
    <div class="bottom-margin"><a href="/board">게시판</a></div>
    <div class="bottom-margin"><a href="">이용약관</a></div>
  </div>

  <div class="bottom-item">
    <div class="bottom-margin">ABOUT ME</div>
    <div class="bottom-margin"><a href="/about/1">홈페이지 정보</a></div>
    <div class="bottom-margin"><a href="/about/2">나의 정보</a></div>
</div>

</div>
</div>
    </body>
</html>
@endsection

<div>
</div>