    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>공지사항</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
    </head>
    @extends('layouts.app')
    <style>


    .table{
        width:1000px;
        margin-top:50px;
        margin-left:20%;
        
    }
    .page{
        margin-top:20px;
        margin-left:auto;
        margin-right:auto;
    }
    .middle-item{

        display:flex;
    
    }
    .search{
        margin-left:auto;
        margin-right:auto;
        display:flex;
    }
    .write-item{
        margin-left:30px;
        padding-right:5%;
    }
    .bar{
        width:400px;
    }
    .category{
        text-align:center;
        border-top:2px solid #e5e5e5;
        border-bottom:2px solid #e5e5e5;
        padding-top:20px;
        padding-bottom:20px;
    }
    .category a{
        margin-left:30px;
        font-size:16px;
        font-weight:bold;
        color:black;
    }
    .page-flex{
        display:flex;
    }
    .btn{
        border:1px solid #e5e5e5;
        color:black;
        background:#e5e5e5;
        padding-top:10px;
    }
    </style>
    @section('content')
    <body>
    <div class="category">
    <a href="/board">자유게시판</a>
    <a href="/notice" style='border-bottom:1px solid; padding:5px;'>공지사항</a>
    </div>

    <div>
    <table class="table table-hover">
    <tr>
    <th>번호</th>
    <th>제목</th>
    <th>작성자</th>
    <th>날짜</th>
    <th>조회수</th>
    </tr>
    @foreach($notices as $notice)
   <tr>
   <td>{{$notice->id}}</td>
   <td><a href="/notice/read/{{$notice->id}}">{{$notice->title}}<a></td>
   <td>{{$notice->userName}}</td>
   <td>{{$notice->date}}</td>
   <td>{{$notice->count}}</td>
   </tr>
   @endforeach
    </table>
    </div>

        <div class="page-flex">
        <div class="page"> {{ $notices->links() }}</div>
        </div>

    <div class="middle-item">
        <div class="search">
        <form method="get" action="/notice">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input class="bar" type="text" name="search">
            <input type="submit" value="검색">
            </form>
            
        <div class="write-item">
        <?php
            if(!empty(auth::user()) && auth::user()->id !=21){
                echo "<a></a>";
            }
            elseif(!empty(auth::user()) && auth::user()->id==21){
                echo "<a class='btn' href='/notice/write'>글쓰기</a>";
                // <button type="submit" class="btn" onclick = "location.href = '/board/write' ">글쓰기</button>
            }
            else{
                echo "<a></a>";
            }
            ?>
        </div>

        </div>
        </div>
        
        @include('bottom')
    </body>
    @endsection
    </html>