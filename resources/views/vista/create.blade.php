<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>aqui podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf

        <label >
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label >
            codigo
            <br>
            <input type="text" name="codigo">
        </label>
        <br>
        <label >
            categoria
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>