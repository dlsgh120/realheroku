@include('about')
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
.content{
    
    margin-top:100px;
}
h1{
    text-align:center;
    font-weight:bold;
}
.content-item{
    margin-top:50px;
    text-align:center;
}
.content-item a {
    font-size:13px;
    color:#e5e5e5;
}
.content-button{
    display:block; 
            width:300px; 
            height:50px; 
            line-height:40px; 
            border:1px #00ffbf solid;; 
            margin:15px auto; 
            background-color:#00ffbf; 
            text-align:center; 
            cursor: pointer; 
            color:white; 
            font-weight:bold;
            transition:all 0.9s, color 0.3;
            border-radius:24px;
            margin-top:50px;
}
</style>
<body>
   <div class="content">
   <h1>신발을 쉽게 사고 팔수 있는 사이트</h1>
   <div class="content-item">
        <a>자신의 유니크한 신발을 공유 할 수 있습니다.</a></br>
        <a>신발에 대한 정보들을 사용자들과 공유 할 수 있습니다.</a></br>
        <a>신발을 편리하게 사고 팔 수 있습니다.</a></br>
        <a style="color:red;">이 사이트는 포트폴리오용으로 제작되었습니다.</a></br>
   </div>
       
   </div>
   <button class="content-button hover">Go To Site</button>
</body>
</html>