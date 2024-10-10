<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumnos::all();
        return response()->json($alumnos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno= new Alumnos();
        $alumno->nombres=$request->nombres;
        $alumno->apellidos=$request->apellidos;
        $alumno->direccion=$request->direccion;
        $alumno->zona=$request->zona;
        $alumno->sexo=$request->sexo;
        $alumno->edad=$request->edad;
        $alumno->save();

        return response()->json($alumno,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $alumno= Alumnos::findOrFail($id);
       return response()->json($alumno,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      try{
        $alumno= Alumnos::findOrFail($id);
        $alumno->nombres=$request->nombres;
        $alumno->apellidos=$request->apellidos;
        $alumno->direccion=$request->direccion;
        $alumno->zona=$request->zona;
        $alumno->sexo=$request->sexo;
        $alumno->edad=$request->edad;
        $alumno->save();
        return response()->json($alumno,200);
    }catch(ModelNotFoundException $ex){
        return response()->json($ex,500);
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

            $alumno= Alumnos::findOrFail($id);
            $alumno->delete();
           return 204;

    }
}
