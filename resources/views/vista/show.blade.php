<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Curso</title>
</head>
<body>
    <h1>Bienvenido al curso  {{ $curso->nombre }}</h1>
    <p>estas en la categoria {{$curso->categoria}}</p>
    <p>del codigo {{$curso->codigo}}</p>
    <br>
    <a href="{{route('curso.index')}}">Volver a la pagina principal de cursos</a>
    <br><br>
    <a href="">Ir a editar un curso</a>
</body>
</html>
