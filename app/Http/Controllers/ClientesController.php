<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct() {}

    public function listagem()
    {
        return view('clientes.listagem');
    }
}
