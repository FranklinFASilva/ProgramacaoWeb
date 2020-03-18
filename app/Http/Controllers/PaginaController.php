<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\Prato;

class PaginaController extends Controller
{
    public function tabela()
    {
        $pratos = prato::orderBy('nome')->get();
        return view('admin.pratos.tabela', compact('pratos'));
    }

    public function form()
    {
        return view('admin.pratos.form');
    }
}
