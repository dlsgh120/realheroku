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

</style>
<body>

<div>
<button onclick="location.href='/about/1'">홈페이지 설명</button>
<button onclick="location.href='/about/2'">나의정보</button>
<button onclick="location.href='/about/3'">사용기술</button>
</div>
</body>
</html>
@endsection