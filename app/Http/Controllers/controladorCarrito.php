<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\validateCarrito;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Http\Request;
>>>>>>> 48f97ac6f8790073ee84cf5c81ce062ddebda317

class controladorCarrito extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $conProducts= DB::table('tb_productos')->where('cantidad', '>', '0')->get();
        
        $conCar= DB::table('tb_carrito')->where('status', '1')->get();
        foreach($conCar as $car){
            $car->pro = DB::table('tb_productos')->where('idProducto',$car->producto_id)->first();
        }

        return view('ventas', compact('conProducts', 'conCar'));
=======
        //
>>>>>>> 48f97ac6f8790073ee84cf5c81ce062ddebda317
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create(validateCarrito $request, $producto)
    {
        $venta ="0";

        $status=1;

        DB::table('tb_carrito')->insert([
            "producto_id" => $producto,
            "venta_id" => $venta,
            "status" => $status,
            "cantidad" => $request -> input('txtCantida'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        return redirect('carrito')->with('agregado','Producto Agregado Correctamente');
=======
    public function create()
    {
        //
>>>>>>> 48f97ac6f8790073ee84cf5c81ce062ddebda317
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
