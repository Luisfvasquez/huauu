<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment_method;

class Payment_methodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $methods = Payment_method::all();
        return view('admin.method_pay.index',compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.method_pay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_method' => 'required',
        ]);

        Payment_method::create($request->all());
        return redirect()->route('payment_method.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $method = Payment_method::find($id);
        return view('admin.method_pay.edit',compact('method'));
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
        Payment_method::find($id)->update($request->all());
        return redirect()->route('payment_method.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment_method::destroy($id);
        return redirect()->route('payment_method.index');
    }
}
