<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
来啦  来啦

<form action="{{route ('ass.store')}}" method="post">
    @csrf
    {{--为什么要起name  因为他执行store方法打印 要有一个键名--}}
    <input type="text" name="stt">


    <button>提交</button>
</form>

</body>
</html>
