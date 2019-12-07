@extends('layouts.app')
<!DOCTYPE>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
@section('content')
<style>
.table{
    margin-left:auto;
    margin-right:auto;
    width:800px;
    border:1px solid #e5e5e5;
    font-size:14px;
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

<table class="table">
  <tr>
    <td colspan="4" class="table-align-center">{{$mains->title}}</td>
  </tr>
  <tr>
    <td>글번호</td><td class="td-input">{{$mains->id}}</td>
    <td>글쓴이</td><td class="td-input">{{$mains->userName}}</td>
  </tr>
  <tr>
    <td>작성날짜</td><td>{{$mains->date}}</td>
    <td>조회수</td><td>{{$mains->count}}</td>
  </tr>
  <tr>
    <td colspan="4" class="table-align-center">본문</td>
  </tr>
  <tr>
  <td colspan="4" height="300">{{$mains->content}}</br><img src="{{ asset('images/' . $mains->image) }}" alt="" width="300px;" height="300px;"></td>
  </tr>
  <tr>
  <td class="table-border-none" colspan="3"><a href="/main">목록</a></td>
  </tr>
</table>

</body>
</html>
@endsection