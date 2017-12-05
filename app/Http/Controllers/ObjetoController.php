<?php

namespace App\Http\Controllers;

use App\Objeto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objeto = Objeto::all();
        return response()->json($objeto,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $objeto = new Objeto();
            $objeto->nombre = $request->nombre;
            $objeto->cantidad = $request->cantidad;
            $objeto->save();
            $mensaje = ['message' => 'Objeto ' . $objeto->nombre . ' creado', 'data' => $objeto];
            return response()->json($mensaje, 201);
        } catch (Exception $e) {
            $mensaje = ['mensaje' => 'Error al crear objeto'];
            return response()->json($mensaje,500);
        }
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
        $objeto = Objeto::find($id);
        return view('objeto.edit',$objeto);
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
        $objeto = Objeto::find($id);
        $objeto->nombre = $request['nombre'];
        $objeto->cantidad = $request['cantidad'];
        return redirect('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function prueba(){
        return view('prueba');
    }
}
