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
    <title>나의정보</title>
</head>
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
.content{
    display:flex;
    margin-top:30px;
}
.content-main{
    margin-left:auto;
    margin-right:auto;
    display:flex;
}
.content-info{
    margin-left:30px;
}
.a1{
    font-size:23px;
    padding-left:20px;
}
.a-item{
    padding-left:30px;
}
.content-table{
    margin-top:20px;
    width:500px;
}
.content-table td{
    border-bottom:1px solid #e5e5e5;
    padding-top:10px;
    padding-bottom:10px;
    padding-left:20px;
}
.bottom{
    margin-top:50px;
    display:flex;
}
.bottom-main{
    margin-top:30px;
    font-size:30px;
    font-weight:bold;
    margin-left:auto;
    margin-right:auto;
}
.bottom2{
    display:flex;
}
.bottom2-main{
    display:flex;
    margin-left:auto;
    margin-right:auto;
}
.bottom-main-item{
            display:block; 
            width:200px; 
            height:200px; 
            line-height:40px; 
            border:1px #00ffbf solid;; 
            margin:30px 5px; 
            background-color:#00ffbf; 
            text-align:center; 
            cursor: pointer; 
            color:white; 
            font-weight:bold;
            transition:all 0.9s, color 0.3;
            border-radius:50% 50%;
}

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
</style>
<body>


<div class="top-sub">
<div class="top-sub-item">
<a href="/about/1">홈페이지 설명</a>
<a href="/about/2" style='border-bottom:1px solid; padding:5px;'>나의정보</a>
</div>
</div>

<div class="profile">
<div class="profile-main">Profile</div>
</div>
 <div class="content">
    <div class="content-main">
        <div class="content-photo">
            <img src="/images/300-1.jpg" width="200px" height="250px">
        </div>
        <div class="content-info">
            <a class="a1">안녕하세요.</a> </br>
            <table class="content-table">
            <tr>
            <td>Name</td>
            <td>Inho Choi</td>
            </tr>
            <tr>
            <td>Email</td>
            <td>dlsgh120@gmail.com</td>
            </tr>
            <tr>
            <td>Phone</td>
            <td>010 5288 3923</td>
            </tr>
            <tr>
            <td>School</td>
            <td>계명대학교 졸업</td>
            </tr>
            <tr colspan="2">
            <td>Url</td>
            <td>https://github.com/dlsgh120/realheroku</br>http://chldlsgh120.dothome.co.kr/index.php</td>
            </tr>
            </table>
        </div>
    </div>
 </div>
 <div class="bottom">
 <div class="bottom-main">Use Stack</div>
 </div>
 <div class="bottom2">
 <div class="bottom2-main">
 <a class="bottom-main-item"></br>language</br>php 7.3</a>
 <a class="bottom-main-item"></br>DB</br>mysql</a>
 <a class="bottom-main-item"></br>Server</br>apache2.2</a>
 <a class="bottom-main-item"></br>FrameWork</br>Laravel6.0</a>
 <a class="bottom-main-item"></br>Cloude Service</br>Heroku</a>
 </div>
 </div>

 @include('bottom')
</body>
</html>
@endsection