<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptops = Laptop::all();
        return view("list-laptop", compact("laptops"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form-laptop");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Laptop::create([
            'Brand' => $request -> Brand,
            'Model' => $request -> Model,
            'Processor' => $request -> Processor,
            'Ram' => $request -> Ram,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laptop = Laptop::findOrFail($id);
        return view("edit-laptop", compact("laptop"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->update([
            'Brand' => $request->Brand,
            'Model' => $request->Model,
            'Processor' => $request->Processor,
            'Ram' => $request->Ram,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Laptop::destroy($request->id);
        return redirect('/');

    }
}
