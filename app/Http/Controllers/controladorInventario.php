<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateBuscarNombre;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controladorInventario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conProducts= DB::table('tb_productos')->orderBy('cantidad')->where('cantidad', '>', 0)->get();

        $conProduct= DB::table('tb_productos')->where('cantidad', '=', 0)->get();
        
        foreach($conProducts as $productos){
            $productos->pro = DB::table('tb_proveedores')->where('idProveedor',$productos->proveedor_id)->first();
        }

        foreach($conProduct as $producto){
            $producto->pro = DB::table('tb_proveedores')->where('idProveedor',$producto->proveedor_id)->first();
        }

        return view('inventario', compact('conProducts', 'conProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(validateBuscarNombre $request)
    {
        $name = $request->input('txtBuscarNombre');

        $conProducts= DB::table('tb_productos')->orderBy('cantidad')->where('nombre_tipo','LIKE','%'.$name.'%')->where('cantidad', '>', 0)->get();

        $conProduct= DB::table('tb_productos')->where('nombre_tipo','LIKE','%'.$name.'%')->where('cantidad', '=', 0)->get();
        
        foreach($conProducts as $productos){
            $productos->pro = DB::table('tb_proveedores')->where('idProveedor',$productos->proveedor_id)->first();
        }

        foreach($conProduct as $producto){
            $producto->pro = DB::table('tb_proveedores')->where('idProveedor',$producto->proveedor_id)->first();
        }

        return view('inventario', compact('conProducts', 'conProduct'));

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
        //
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
        //
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
}
