<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            background-color: darkcyan;
            border-radius: 20px;
            padding: 10px;
            color: white;
            font-size: 15pt;
            width: 2.5em;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
@foreach($var_div as $div)
    <div>{{$div}}</div>
@endforeach
</body>
</html>
