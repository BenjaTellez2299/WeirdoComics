<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function exportPdf(){

        $users = DB::table('tb_usuarios')->get()->first();
        $ticket = DB::table('tb_productos')->get();

        $pdf = PDF::loadView('pdf.users', compact('users', 'ticket'));

        return $pdf->download('user-list.pdf');
    }
}
