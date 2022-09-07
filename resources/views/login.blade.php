<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <form action="{{ route('login') }} " method = "POST">
        @if(session()->has('errorSuccess'))
            <h3>{{session()->get('errorSuccess')}}</h3>
        @endif
        @csrf
        <input type="email" name="email" placeholder="Введите почту..." id="">
        @error('email')<p> {{$message}}</p> @enderror
        <input type="password" name="password" placeholder="Введите пароль..." id="">
        @error('password')<p> {{$message}}</p> @enderror
        <input type="submit" value="Авторизоваться">
    </form>
</body>
</html>
