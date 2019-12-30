@extends('layouts.app')
<!DOCTYPE>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
@section('content')
<style>

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

.table{
    margin-left:auto;
    margin-right:auto;
    width:800px;
    border:1px solid #e5e5e5;
    font-size:14px;
    margin-top:50px;
}
.table-align-center{
    text-align:center;
}
.table-border-none{
    border:1px solid white;
}
.table-border-none2{
    border:1px solid white;
    text-align:right;
}
.table-add-item{
  margin-left:20px;
}
</style>
<html>
<head></head>
<title></title>
<body>

<div class="category">
<a href="/board" style='border-bottom:1px solid; padding:5px;'>자유게시판</a>
<a href="/notice">공지사항</a>
</div>

<table class="table">
  <tr>
    <td colspan="4" class="table-align-center">{{$boards->title}}</td>
  </tr>
  <tr>
    <td>글번호</td><td class="td-input">{{$boards->id}}</td>
    <td>글쓴이</td><td class="td-input">{{$boards->userName}}</td>
  </tr>
  <tr>
    <td>작성날짜</td><td>{{$boards->date}}</td>
    <td>조회수</td><td>{{$boards->count}}</td>
  </tr>
  <tr>
    <td colspan="4" class="table-align-center">본문</td>
  </tr>
  <tr>
  <td colspan="4" height="300">{{$boards->content}}</td>
  </tr>
  <tr>
  <td class="table-border-none" colspan="3"><a href="/board">목록</a></td>
  @if(!empty(Auth::user()) && $boards->userId==Auth::user()->id)
  <td class="table-border-none2"><a href="/board/destroy/{{$boards->id}}">삭제</a><a class="table-add-item"href="/board/edit/{{$boards->id}}">수정</a></td>
  @endif

  @if(!empty(Auth::user()) && Auth::user()->id != $boards->userId)
  <a></a>
  @endif

  @if(empty(Auth::user()))
  <a></a>
  @endif
  </tr>
</table>

@include('bottom')
</body>
</html>
@endsection