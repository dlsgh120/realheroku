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
.bottom-item{
    font-size:13px;
    color:#e5e5e5;
    margin-top:5px;
}
</style>
<html>
<head></head>
<body>
<form method="post" action="/main" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="main-content">글쓰기</div>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="제목을 작성해주세요." required>
            </div>
        </div>
    
        <div class="form-group row">
            <div class="col-sm-10">
                <textarea class="form-control" id="content" name="content" rows="6" placeholder="상품 내용을 정확하게 입력해주세요." required></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="file" class="form-control"  name="image">
            </div>
        </div>
        
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="ture"></span>
                <span class="sr-only">Error:</span>
                    @foreach ($errors->all() as $message)
                        {{$message}} 
                    @endforeach
            </div>
            @endif

        <div class="form-group row">
            <div class="col-sm-10">

                <div style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">등록하기</button>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">

                <div style="margin-top: 20px;">
                    <a class="bottom-item">●상품 이미지를 반드시 등록해주세요</a></br>
                    <a class="bottom-item">●상품정보를 정확하게 입력해 주세요.(상품이름, 상품 색상및 사이즈, 가격 등)</a></br>
                    <a class="bottom-item">●판매자 및 구매자의 연락처를 입력해 주세요.(휴대폰번호, 카카오톡 등)</a></br>
                    <a class="bottom-item">●정확하지 않은 정보 입력시 내용이 삭제 될 수 있습니다.</a></br>
                </div>
            </div>
        </div>
</form>
</body>
</html>
@endsection
