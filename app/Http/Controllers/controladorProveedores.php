<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateProveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class controladorProveedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulProvs= DB::table('tb_proveedores')->get();

        return view('consultarProveedor', compact('consulProvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarProveedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateProveedor $request)
    {
        DB::table('tb_proveedores')->insert([
            "empresa"=>$request->input('txtEmpresa'),
            "dirección"=>$request->input('txtDirreccion'),
            "pais"=>$request->input('txtPais'),
            "contacto"=>$request->input('txtContacto'),
            "noFijo"=>$request->input('txtNumFijo'),
            "noCelu"=>$request->input('txtNumCelu'),
            "correo"=>$request->input('txtCorreo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('prov/index')->with('confirm','Se guardo exitosamente')->with('proveedor', $request->txtEmpresa);
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
        $conPro = DB::table('tb_proveedores')->where('idProveedor',$id)->first();

        return view('editarProveedor', compact('conPro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validateProveedor $request, $id)
    {
        DB::table('tb_proveedores')->where('idProveedor',$id)->update([
            "empresa"=>$request->input('txtEmpresa'),
            "dirección"=>$request->input('txtDirreccion'),
            "pais"=>$request->input('txtPais'),
            "contacto"=>$request->input('txtContacto'),
            "noFijo"=>$request->input('txtNumFijo'),
            "noCelu"=>$request->input('txtNumCelu'),
            "correo"=>$request->input('txtCorreo'),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('prov/index')->with('edit','Se edito exitosamente')->with('proveedor', $request->txtEmpresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_proveedores')->where('idProveedor',$id)->delete();

        return redirect('prov/index')->with('delete','Se elimino correctamente');
    }
}
