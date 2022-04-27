<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span{
            display: flex;
            background-color: #ff99bd;
            border-radius: 20px;
            padding: 5px;
            color: white;
            font-size: 20pt;
            width: 2.5em;
            margin: 10px;
        }
    </style>
</head>
<body>
@foreach($var_span as $span)
    @if($span % 2 == 0)
        <span>{{$span}}</span>
    @endif
@endforeach
</body>
</html>
