<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="{{ route('register) }} " method = "POST">
    @if(session()->has('errorSuccess'))
        <h3>{{session()->get('errorSuccess')}}</h3>
    @endif
    @csrf
    <input type="email" name="email" placeholder="Введите почту..." id="">
    @error('email')<p> {{$message}}</p> @enderror
        <input type="text" name="name" placeholder="Введите имя..." id="">
        @error('name')<p>{{$message}}</p>  @enderror
    <input type="password" name="password" placeholder="Введите пароль..." id="">
    @error('password')<p> {{$message}}</p> @enderror
        <input type="password" name="password_confirmed" placeholder="Повторите пароль..." id="">

    <input type="submit" value="Регистрация">
</form>
</body>
</html>
