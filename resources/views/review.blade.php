<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
.table{
    margin-left:auto;
    margin-right:auto;
    width:800px;
    border:1px solid #e5e5e5;
    font-size:14px;
}
</style>
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
  @if(!empty(Auth::user()) && $mains->userId==Auth::user()->id)
  <td class="table-border-none2"><a href="/main/destroy/{{$mains->id}}">삭제</a><a class="table-add-item"href="/main/edit/{{$mains->id}}">수정</a></td>
  @endif

  @if(!empty(Auth::user()) && Auth::user()->id != $mains->userId)
  <a></a>
  @endif

  @if(empty(Auth::user()))
  <a></a>
  @endif
  </tr>
</table>


<!--  -->

<div class="review">
  <table class="table">
    @foreach($test as $review)
        @if($review->boardId=='6')
    <tr>
    <td style="width:200px;"><a>{{$review->userName}}</a></br><a>{{$review->date}}</a></td>
    <td>{{$review->content}}</td>
    <td>{{$review->boardId}}</td>
    </tr>
        @endif
    @endforeach
  </table>
</div>
</body>
</html>