<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Category;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Inventory::with(['products.category'])->get();
       
        return view('admin.inventory.index', compact('products'));    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
      
        return view('admin.inventory.show', compact('product', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_product' => 'required|string',
            'description' => 'required|string',
            'category' => 'category_id|numeric',
        ]);

        Product::find($id)->update($request->all());
        return redirect()->route('inventory.index');
    }

}
