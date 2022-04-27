<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p {
            justify-content: center;
            background: white;
            border-top: 5px solid #EAF9F9;
            border-bottom: 5px solid #EAF9F9;
            color: #3A3C55;
            padding: 30px 30px 30px 90px;
            display: flex;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
        }
        p:before {;
            font-family: serif;
            color: white;
            background: #FB6652;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 50px;
            line-height: 1.35;
        }
    </style>
</head>
<body>
<p>Моя любимая строчка из книги: {{$text}}</p>
</body>
</html>
