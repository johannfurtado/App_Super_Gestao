<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
