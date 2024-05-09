<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>en esta pagina podras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf
        @method('put')

        <label >
            Nombre
            <br>
            <input type="text" name="nombre" value="{{old('nombre',$curso->nombre)}}">
        </label>
        @error('nombre')
        <br>
        <span>{{$message}}</span>
        <br>   
        @enderror
        <br>
        <label >
            codigo
            <br>
            <input type="text" name="codigo" value="{{old('codigo', $curso->codigo)}}">
        </label>
        @error('codigo')
        <br>
        <span>{{$message}}</span>
        <br>   
        @enderror
        <br>
        <label >
            categoria
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
        <br>
        <span>{{$message}}</span>
        <br>   
        @enderror
        <br>
        <button type="submit">Actualiza formulario</button>
    </form>
</body>
</html>