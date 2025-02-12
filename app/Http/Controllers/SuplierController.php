<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_supplier' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);

        Supplier::create($request->all());
        return redirect()->route('suplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Supplier::find($id);
        return view('admin.supplier.edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Supplier::find($id)->update($request->all());
        return redirect()->route('suplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Supplier::destroy($id);
        return redirect()->route('suplier.index');
    }
}
