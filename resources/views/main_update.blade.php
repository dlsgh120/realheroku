@extends('layouts.app')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
@section('content')
<style>
body{
    margin-left:50px;
    margin-right:50px;
}
.main-content{
    font-weight:bold;
    font-size:23px;
    margin-bottom:20px;
}
</style>
<html>
<head></head>
<body>
<form method="post" action="/main/update/{{$mains->id}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="main-content">내용 수정</div>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{$mains->title}}" required>
            </div>
        </div>
    
        <div class="form-group row">
            <div class="col-sm-10">
                <textarea class="form-control" id="content" name="content" rows="6" required>{{$mains->content}}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" name="image_text" value="{{$mains->image}}" readonly>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-10">

                <div style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">변경하기</button>
                </div>
            </div>
        </div>
</form>
</body>
</html>
@endsection
