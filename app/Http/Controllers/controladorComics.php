<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateComics;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controladorComics extends Controller
{
    public function index()
    {
        $comic='Comic';

        $conComics= DB::table('tb_productos')->where('categoria',$comic)->get();

        foreach($conComics as $com){
            $com->provs = DB::table('tb_proveedores')->where('idProveedor',$com->proveedor_id)->first();
        }

        return view('consultarComics', compact('conComics'));

    }

    public function create()
    {
        $consultaProve=DB::table('tb_proveedores')->get();

        return view('agregarComic', compact('consultaProve'));
    }

    public function store(validateComics $request)
    {
        $precioCompra = $request->txtPreCompra;

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $consultaIdCom = DB::table('tb_productos')->where('idProducto', $id)->first();

        $conProvs = DB::table('tb_proveedores')->get();

        return view('editarComic', compact('consultaIdCom', 'conProvs'));
    }

    public function update(validateComics $request, $id)
    {
        $precioCompra = $request->txtPreCompra;

        $precioVenta = (0.4*$precioCompra)+$precioCompra;

        $comic = 'Comic';

        DB::table('tb_productos')->where('idProducto', $id)->update([
            "proveedor_id" => $request -> input('txtProveedor'),
            "nombre_tipo" => $request -> input('txtNombre'),
            "edicion_marca" => $request -> input('txtEdicion'),
            "company_descripcion" => $request -> input('txtCompany'),
            "categoria" => $comic,
            "cantidad" => $request -> input('txtCantidad'),
            "precioCompra" => $request -> input('txtPreCompra'),
            "precioVenta" => $precioVenta,
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('comic')->with('edit','Comic Actualizado Correctamente')->with('txtNombre', $request->txtNombre);
    }

    public function destroy($id)
    {
        DB::table('tb_productos')->where('idProducto',$id)->delete();

        return redirect('comic')->with('delete','Se elimino correctamente');
    }
}
