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
老大在这里

<form action="{{route ('admin.store')}}" method="post">
    @csrf
    <input type="text" name="stt">
    <button>提交</button>
</form>

</body>
</html>
