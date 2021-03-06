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
.notice{
  border:1px solid white;
  color:red;
  font-weight:bold;
}
</style>
<html>
<head></head>
<title></title>
<body>

<div class="category">
    <a href="/board">자유게시판</a>
    <a href="/notice" style='border-bottom:1px solid; padding:5px;'>공지사항</a>
    </div>

<table class="table">
  <tr>
    <td colspan="4" class="table-align-center">{{$notices->title}}</td>
  </tr>
  <tr>
    <td>글번호</td><td class="td-input">{{$notices->id}}</td>
    <td>글쓴이</td><td class="td-input">{{$notices->userName}}</td>
  </tr>
  <tr>
    <td>작성날짜</td><td>{{$notices->date}}</td>
    <td>조회수</td><td>{{$notices->count}}</td>
  </tr>
  <tr>
    <td colspan="4" class="table-align-center">본문</td>
  </tr>
  <tr>
  <td colspan="4" height="300">{{$notices->content}}</td>
  </tr>
  <tr>
  <td class="table-border-none" colspan="3"><a href="/notice">목록</a></td>
  @if(!empty(Auth::user()) && Auth::user()->id==21)
  <td class="table-border-none2"><a href="/notice/destroy/{{$notices->id}}">삭제</a><a class="table-add-item"href="/notice/edit/{{$notices->id}}">수정</a></td>
  @endif

  @if(!empty(Auth::user()) && Auth::user()->id !=21)
    <?php
        echo "<a></a>";
    ?>
  @endif

  @if(empty(Auth::user()))
    <?php
        echo "<a></a>";
    ?>
  @endif
  </tr>
  <tr>
  <td class="notice">●공지사항은 댓글기능이 제한되어 있습니다.</td>
  </tr>
</table>

@include('bottom')
</body>
</html>
@endsection