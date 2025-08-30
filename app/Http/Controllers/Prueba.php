<?php

namespace App\Http\Controllers;

use App\Events\CompraFinalizada;
use App\Models\Buy;
use App\Models\Inventory;
use Illuminate\Http\Request;

class Prueba {


    public function test()
    {
        // Código de prueba

        CompraFinalizada::dispatch();
        
    }


    public function WebSocket()
    {
        $compra = new Buy();
        CompraFinalizada::dispatch($compra);
        $producto = Inventory::with('products')->where('product_id', 2)->first();

        return view('Sockets.producto', compact('producto'));
    }


}