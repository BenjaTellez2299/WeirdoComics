<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateProveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class controladorProveedores extends Controller
{
    public function index()
    {
        $consulProvs= DB::table('tb_proveedores')->get();

        return view('consultarProveedor', compact('consulProvs'));
    }

    public function create()
    {
        return view('agregarProveedor');
    }

    public function store(validateProveedor $request)
    {
        DB::table('tb_proveedores')->insert([
            "empresa"=>$request->input('txtEmpresa'),
            "dirección"=>$request->input('txtDireccion'),
            "pais"=>$request->input('txtPais'),
            "contacto"=>$request->input('txtContacto'),
            "noFijo"=>$request->input('txtNumFijo'),
            "noCelu"=>$request->input('txtNumCelu'),
            "correo"=>$request->input('txtCorreo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('prove')->with('proveeagregado','Proveedor Agregado Correctamente')->with('txtEmpresa', $request->txtEmpresa);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $consultaId = DB::table('tb_proveedores')->where('idProveedor',$id)->first();

        return view('editarProveedor', compact('consultaId'));
    }

    public function update(validateProveedor $request, $id)
    {
        DB::table('tb_proveedores')->where('idProveedor',$id)->update([
            "empresa"=>$request->input('txtEmpresa'),
            "dirección"=>$request->input('txtDireccion'),
            "pais"=>$request->input('txtPais'),
            "contacto"=>$request->input('txtContacto'),
            "noFijo"=>$request->input('txtNumFijo'),
            "noCelu"=>$request->input('txtNumCelu'),
            "correo"=>$request->input('txtCorreo'),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('prove')->with('proveedoreditado','Proveedor Editado Correctamente')->with('txtEmpresa', $request->txtEmpresa);
    }

    public function destroy($id)
    {
        DB::table('tb_proveedores')->where('idProveedor',$id)->delete();

        return redirect('prov/index')->with('delete','Se elimino correctamente');
    }
}
