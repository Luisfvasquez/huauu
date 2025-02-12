<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Purchase_detail;
use App\Models\Inventory;

class BuyProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supliers = Supplier::all();
        $categories = Category::all();
        return view ('admin.Compra', compact('supliers', 'categories'));
    }
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'supplier_id' => 'required',
            'name_product' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required',
            'quantity_buy' => 'required|numeric',
            'price_buy' => 'required|numeric',
            'status' => 'required',
        ]);
        
        $product = Product::create($request->all());
        $buy = Buy::create($request->all());
        $idProduct = $product->id;
        $idBuy = $buy->id;
        
        $purchase_data = [
            'buy_id' => $idBuy,
            'product_id' => $idProduct,
            'quantity_buy' => $request->quantity_buy,
            'price_buy' => $request->price_buy,
        ];

        Purchase_detail::create($purchase_data);

        Inventory::create([
            'product_id' => $idProduct,
            'stock' => $request->quantity_buy,
        ]);

        return redirect()->route('buy.index');
    }
    
    public function showAll(){
        $products= Purchase_detail::with(['product.category','buy.supplier'])->get();
       
        return view('admin.GestionCompras', compact('products'));
    }
}
