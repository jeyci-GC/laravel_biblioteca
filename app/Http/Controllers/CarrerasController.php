<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = carrera::all();
        return view('carreras.carreras',['carreras'=>$carreras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carreras.nuevaCarrera');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('logo')->store('logos');
        $carrera=new carrera;
            $carrera->nombre=$request->nombre;
            $carrera->logo=$path;
            $carrera->numero=$request->numero;

            $carrera->save();
            return redirect('/carreras');
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
        $carrera_id=$id;

        $carrera=Carrera::find($carrera_id);
        return view('carreras.editarCarrera',['carrera'=>$carrera]);
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
        $carrera=Carrera::find($id);
        $path = $request->file('logo')->store('logos');
        //$carrera=new carrera;
            $carrera->nombre=$request->nombre;
            $carrera->logo=$path;
            $carrera->numero=$request->numero;

            $carrera->save();

            //return "Datos actualizados";
            return redirect('/carreras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carrera::destroy($id);
        return redirect('/carreras');
    }
}
