<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/estilos__login.css">
    <title>Login</title>
</head>
<body>

    <form action="{{route('inicSes')}}" class="login animate__animated animate__zoomInUp" method="POST">
        @csrf
        <div class="login__pic">
            <img src="{!! asset('img/logow.png') !!}" alt="Logo Weirdo Comics" class="login__img">
        </div>
        <input type="text" placeholder="Correo" class="login__email" name="txtUser" value="{{old('txtUser')}}">
        <p class="login__warning">{{ $errors->first('txtUser')}}</p>
        <input type="password" placeholder="Contraseña" class="login__pass" name="txtPass">
        <p class="login__warning">{{ $errors->first('txtPass')}}</p>
        <button type="submit" class="login__btn">Iniciar Sesion</button>
    </form>

</body>
</html>