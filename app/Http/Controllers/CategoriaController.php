<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::get();
        echo json_encode($categoria);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();   
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        
        $categoria->save();
        echo json_encode($categoria);
    }

    

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoria_id)
    {
        $categoria =  Categoria::find($categoria_id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        
        $categoria->save();
        echo json_encode($categoria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\$categoria_id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $categoria_id)
    {
        $categoria = Categoria::find($categoria_id);
        $categoria->delete();
    }
}
