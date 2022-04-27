<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .list {
            display: flex;
            justify-content: center;
            padding:0;
            list-style: none;
        }
        .list li{
            padding:6px;
        }
        .list li:before {
            padding-right:10px;
            font-weight: bold;
            color: #FB6652;
            content: "\2734";
            transition-duration: 0.5s;
        }
        .list li:hover:before {
            color: greenyellow;
            content: "\2714";
        }
    </style>
</head>
<body>

@foreach($var_li as $li)
    <ul class="list">
        <li>{{$li}}</li>
    </ul>
@endforeach
</body>
</html>
