<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class productosController extends Controller
{
    public function index(){
        $productos = producto::all();
        return view("index", compact('productos'));
    }

    public function show(producto $producto){
        return view("productos.show", compact('producto'));
    }
}
