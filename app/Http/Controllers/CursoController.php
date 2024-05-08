<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //funcion que me va a listar todos los campos
        $cursos = Curso::orderBy('id','desc')->paginate(); //variable que me va a ordenar los campos paginados y en orden por id y decendiente
        return view('vista.index', compact('cursos'));//retorna todos los campos a la vista
    }
    public function create(){//manda la informacion para crear un registro
        return view('vista.create');//retorna la vista
    }
    public function store(Request $request){ //funcion para almacenar los dotas
      $curso = new Curso();//crea una nueva instancia
      $curso->nombre = $request->nombre;//input correspondiente con el campo nombre
      $curso->codigo = $request->codigo;//input correspondiente con el campo codigo
      $curso->categoria = $request->categoria;//input correspondientes con el campo categoria
      $curso->save();//guarda los datos actualizados
      return redirect()->route('cursos.store', $curso);//redirecciona los campos a la vista cursos.store
    }
    public function show($id){//funcion que busca por id
        $curso = Curso::find($id);//variable que busca por id
        return view('vista.show', compact('curso'));///retorna en la vista show
    }
    public function edit($id){

    }
}