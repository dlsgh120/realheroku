@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/latest/js/bootstrap.min.js"></script>
    <title>AboutMe</title>
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
}
</style>
<body>

<div>
<!-- <button onclick="location.href='/about/1'">홈페이지 설명</button>
<button onclick="location.href='/about/2'">나의정보</button>
<button onclick="location.href='/about/3'">사용기술</button> -->

<div class="top-sub">
<div class="top-sub-item">
<a href="/about/1">홈페이지 설명</a>
<a href="/about/2">나의정보</a>
</div>
</div>

</div>
</body>
</html>
@endsection