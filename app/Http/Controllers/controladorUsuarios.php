<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateUsuario;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controladorUsuarios extends Controller
{
    public function index()
    {
        $consultaUsuarios=DB::table('tb_usuarios')->get();

        return view('consultarUsuario', compact('consultaUsuarios'));
    }

    public function create()
    {
        return view('agregarUsuario');
    }

    public function store(validateUsuario $request)
    {
        DB::table('tb_usuarios')->insert([
            "nombre" => $request -> input('txtNomb'),
            "noEmpleado" => $request -> input('txtNoEmpleado'),
            "contra" => $request -> input('txtContra'),
            "turno" => $request -> input('txtTurno'),
            "rol" => $request -> input('txtRol'),
            "fehcaNac" => $request -> input('txtFechaNaci'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('usuario')->with('usuarioagregado','Usuario Agregado Correctamente')->with('txtNomb', $request->txtNomb);
    }

    public function show($id)
    {
        $consultaIdUsu = DB::table('tb_usuarios')->where('idUsuario', $id)->first();

        return view();
    }

    public function edit($id)
    {
        $consultaIdUsu = DB::table('tb_usuarios')->where('idUsuario', $id)->first();

        return view('editarUsuario', compact('consultaIdUsu'));
    }

    public function update(validateUsuario $request, $id)
    {
        DB::table('tb_usuarios')->where('idUsuario', $id)->update([
            "nombre" => $request -> input('txtNomb'),
            "noEmpleado" => $request -> input('txtNoEmpleado'),
            "contra" => $request -> input('txtContra'),
            "turno" => $request -> input('txtTurno'),
            "rol" => $request -> input('txtRol'),
            "fehcaNac" => $request -> input('txtFechaNaci'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('usuario')->with('usuarioeditado','Usuario Editado Correctamente')->with('txtNomb', $request->txtNomb);
    }

    public function destroy($id)
    {
        //
    }
}
