<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateComics;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controladorComics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic='Comic';

        $conComics= DB::table('tb_productos')->where('categoria',$comic)->get();

        foreach($conComics as $com){
            $com->provs = DB::table('tb_proveedores')->where('idProveedor',$com->proveedor_id)->first();
        }

        return view('consultarComics', compact('conComics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultaProve=DB::table('tb_proveedores')->get();

        return view('agregarComic', compact('consultaProve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateComics $request)
    {
        $precioCompra = $request->txtPrecioCom;

        $precioVenta = (0.4*$precioCompra)+$precioCompra;

        $comic = 'Comic';

        DB::table('tb_productos')->insert([
            "proveedor_id" => $request -> input('txtProveedor'),
            "nombre_tipo" => $request -> input('txtNombre'),
            "edicion_marca" => $request -> input('txtEdicion'),
            "company_descripcion" => $request -> input('txtCompany'),
            "categoria" => $comic,
            "cantidad" => $request -> input('txtCantidad'),
            "precioCompra" => $request -> input('txtPreCompra'),
            "precioVenta" => $precioVenta,
            "fecha" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('comic')->with('confirm','Comic Agregado Correctamente')->with('txtNombre', $request->txtNombre);
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
