<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>자유게시판</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
</head>
@extends('layouts.app')
<style>
.profile{
    margin-top:50px;
    display:flex;
}
.profile-main{
    font-size:30px;
    font-weight:bold;
    margin-left:auto;
    margin-right:auto;
}

.table{
    width:90%;
    margin-top:50px;
    margin-left:50px;
    margin-right:50px;
}
.page{
    margin-top:20px;
    margin-left:50px;
}
.bottom-item{

    display:flex;
}
.search{
    margin-left:auto;
    margin-right:auto;
}
.write{
    margin-top: 30px;
    display:flex;
}
.write-item{
    margin-left:auto;
    padding-right:5%;
}
.bar{
    width:400px;
}

</style>
@section('content')
<body>

<div class="profile">
<a class="profile-main" href='/board'>자유게시판</a>
</div>

<div class="content">
    <table class="table table-hover">
    <tr>
    <th>번호</th>
    <th>제목</th>
    <th>작성자</th>
    <th>날짜</th>
    <th>조회수</th>
    </tr>
    @foreach($boards as $board)
   <tr>
   <td>{{$board->id}}</td>
   <td><a href="/board/read/{{$board->id}}">{{$board->title}}<a></td>
   <td>{{$board->userName}}</td>
   <td>{{$board->date}}</td>
   <td>{{$board->count}}</td>
   </tr>
   @endforeach
    </table>
    
        <div class="page"> {{ $boards->links() }}</div>
    <div class="bottom-item">
        <div class="search">
        <form method="get" action="/board">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input class="bar" type="text" name="search">
            <input type="submit" value="검색">
            </form>
        </div>
        </div>

    <div class="write">
    <div class="write-item">
    @if(empty(auth::user()))
        <button type="submit" class="btn" onclick = "location.href = '/login' ">글쓰기</button>
   @endif
   @if(!empty(auth::user()))
    <button type="submit" class="btn" onclick = "location.href = '/board/write' ">글쓰기</button>
    @endif
    </div>
    </div>
    </div>
</body>
@endsection
</html>