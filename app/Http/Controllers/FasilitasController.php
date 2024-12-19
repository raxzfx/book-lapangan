<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::paginate(10);
        return view ('admin.pages.fasilitas',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.fasilitasAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'fasilitas' => 'required',
        ]);
        Fasilitas::create($validate);
        return redirect()->route('admin.pages.fasilitas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('admin.form.fasilitasEdit',compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'fasilitas' => 'required',
        ]);
        Fasilitas::find($id)->update($validate);
        return redirect()->route('admin.pages.fasilitas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fasilitas::find($id)->delete();
        return redirect()->route('admin.pages.fasilitas');
    }
}
