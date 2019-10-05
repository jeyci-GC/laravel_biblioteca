<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Carrera;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros=Libro::all();
        return view('libros.libros',['libros'=>$libros]);
        return redirect('/libros');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
        $categorias=Categoria::all();
        $carreras=Carrera::all();
        return view('libros.nuevoLibro',['carreras'=>$carreras,'categorias'=>$categorias]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Libro::create($request->all());
        return redirect('/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $libro_id=$id;
        $categorias=Categoria::all();
        $carreras=Carrera::all();
        $libro=Libro::find($libro_id);
        return view('libros.editarLibro',['libro'=>$libro,'carreras'=>$carreras,'categorias'=>$categorias]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         $libro=libro::find($id);
            $libro->titulo=$request->titulo;
            $libro->isbn=$request->isbn;
            $libro->autor=$request->autor;
            $libro->carrera_id=$request->carrera_id;
            $libro->categoria_id=$request->categoria_id;

            $libro->save();

            //return "Datos actualizados";
            return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        libro::destroy($id);
        return redirect('/libros');
    }
}
