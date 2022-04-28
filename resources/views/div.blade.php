<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@foreach($var_div as $div)
    <div class="container">
        <div class="row g-4 text-white">
            <div class="col-6">
                <div class="p-3 m-2 border text-center bg-primary">{{$div}}</div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 border text-center bg-primary">{{$div}}</div>
            </div>
        </div>
    </div>
@endforeach
</body>
</html>

