<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validateArticulo;

class controladorArticulos extends Controller
{
    public function index()
    {
        $consultaArticulos=DB::select('SELECT * FROM tb_productos P INNER JOIN tb_proveedores O ON O.idProveedor = P.proveedor_id WHERE categoria = "Articulo"');
        $consultarProv=DB::table('tb_proveedores')->get();

        return view('consultarArticulo', compact('consultaArticulos', 'consultarProv'));
    }

    public function create()
    {
        $consultaProve=DB::table('tb_proveedores')->get();

        return view('agregarArticulo', compact('consultaProve'));
    }

    public function store(validateArticulo $request)
    {
        $precioCompra = $request->txtPrecioCom;

        $precioVenta = (0.4*$precioCompra)+$precioCompra;

        $articulo = 'Articulo';

        DB::table('tb_productos')->insert([
            "proveedor_id" => $request -> input('txtProveedor'),
            "nombre_tipo" => $request -> input('txtTipo'),
            "edicion_marca" => $request -> input('txtMarca'),
            "company_descripcion" => $request -> input('txtDescripcion'),
            "categoria" => $articulo,
            "cantidad" => $request -> input('txtCantidad'),
            "precioCompra" => $request -> input('txtPrecioCom'),
            "precioVenta" => $precioVenta,
            "fecha" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('articulo')->with('articuloagregado','Articulo Agregado Correctamente')->with('txtTipo', $request->txtTipo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $consultaIdArt = DB::table('tb_productos')->where('idProducto', $id)->first();

        $conProvs = DB::table('tb_proveedores')->get();

        return view('editarArticulo', compact('consultaIdArt', 'conProvs'));
    }

    public function update(validateArticulo $request, $id)
    {
        $precioCompra = $request->txtPrecioCom;

        $precioVenta = (0.4*$precioCompra)+$precioCompra;

        DB::table('tb_productos')->where('idProducto', $id)->update([
            "proveedor_id" => $request -> input('txtProveedor'),
            "nombre_tipo" => $request -> input('txtTipo'),
            "edicion_marca" => $request -> input('txtMarca'),
            "company_descripcion" => $request -> input('txtDescripcion'),
            "cantidad" => $request -> input('txtCantidad'),
            "precioCompra" => $request -> input('txtPrecioCom'),
            "precioVenta" => $precioVenta,
            "updated_at" => Carbon::now()
        ]);

        return redirect('articulo')->with('articuloeditado','Usuario Editado Correctamente')->with('txtTipo', $request->txtTipo);
    }

    public function destroy($id)
    {
        DB::table('tb_productos')->where('idProducto',$id)->delete();

        return redirect('articulo')->with('delete','Se elimino correctamente');
    }
}
