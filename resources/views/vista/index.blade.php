<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>bienvenido a la pagina principal de cursos</h1>
    <br>
    <a href="{{route('cursos.create')}}">crear</a>
     <br>
    @foreach ($cursos as $curso)
    <li>
        <a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a>
    </li>

     {{$cursos->links()}}
    
    @endforeach
    
</body>
</html>