@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>홈페이지설명</title>
</head>
<style>

.top-sub{
    border-top:2px solid #e5e5e5;
    border-bottom:2px solid #e5e5e5;
    padding-top:20px;
    padding-bottom:20px;
    display:flex;
}
.top-sub-item{
    margin-left:auto;
    margin-right:auto;
}
.top-sub-item a {
    margin-left:100px;
    color:black;
    font-weight:bold;
    font-size:16px;
}
.page-flex{
    display:flex;
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
/* .write{
margin-top: 30px;


} */
.write-item{

padding-right:5%;
margin-left:30px;
}
.bar{
width:400px;
}
.table{
    width:1000px;
    margin-top:50px;
    margin-left:20%;
}
</style>
<body>

<div class="top-sub">
<div class="top-sub-item">
<a href="/main" style='border-bottom:1px solid; padding:5px;'>사고/팔기</a>
<!-- <a href="/main/share">공유</a> -->
</div>
</div>

<table class="table table-hover">
    <tr>
        <th>번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>
        <th>조회수</th>
    </tr>
    @foreach($mains as $main)
    <tr>
        <td>{{$main->id}}</td>
        <td><a href="/main/read/{{$main->id}}">{{$main->title}}<a></td>
        <td>{{$main->userName}}</td>
        <td>{{$main->date}}</td>
        <td>{{$main->count}}</td>
    </tr>
    @endforeach
</table>

<div class="page-flex">
<div class="page"> {{ $mains->links() }}</div>
</div>


    <div class="middle-item">
        <div class="search">
        <form method="get" action="/main">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <input class="bar" type="text" name="search">
            <input type="submit" value="검색">
            </form>
            <div class="write-item">
    @if(empty(auth::user()))
        <button type="submit" class="btn" onclick = "location.href = '/login' ">글쓰기</button>
   @endif
   @if(!empty(auth::user()) )
    <button type="submit" class="btn" onclick = "location.href = '/main/write' ">글쓰기</button>
    @endif
    </div>
        </div>
        </div>

<!-- <div class="write">
   
    </div> -->
    @include('bottom')
</body>
</html>
@endsection
