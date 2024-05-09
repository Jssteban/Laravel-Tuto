<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index(){ //funcion que me va a listar todos los campos
        $cursos = Curso::orderBy('id','desc')->paginate(); //variable que me va a ordenar los campos paginados y en orden por id y decendiente
        return view('vista.index', compact('cursos'));//retorna todos los campos a la vista
    }
    public function create(){//manda la informacion para crear un registro
        return view('vista.create');//retorna la vista
    }

    public function store(StoreCurso $request){ //funcion para almacenar los dotas
    //   $curso = new Curso();//crea una nueva instancia
    //   $curso->nombre = $request->nombre;//input correspondiente con el campo nombre
    //   $curso->codigo = $request->codigo;//input correspondiente con el campo codigo
    //   $curso->categoria = $request->categoria;//input correspondientes con el campo categoria
    //   $curso->save();//guarda los datos actualizados
    $curso = Curso::create($request->all());
    return redirect()->route('cursos.store', $curso);//redirecciona los campos a la vista cursos.store
    }

    public function show($id){//funcion que busca por id
        $curso = Curso::find($id);//variable que busca por id
        return view('vista.show', compact('curso'));///retorna en la vista show
    }

    public function edit(Curso $curso){
       
        return view('vista.edit', compact('curso'));

    }
    public function update(StoreCurso $request, Curso $curso){
        // $request->validate([
        //     'nombre'=> 'required|min:3',
        //     'codigo'=> 'required',
        //     'categoria'=> 'required',
        //   ]);
        // $curso->nombre = $request->nombre;
        // $curso->codigo = $request->codigo;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        $curso->update($request->all());
        return redirect()->route('cursos.store', $curso);
    }

    public function destroy($id){
       $curso = Curso::find($id);
       if(!$curso){
        return response()->json(['message'=>'no se encontro'] ,404);
       }
       $curso->delete();
        return redirect()->route('cursos.index');
    }
}