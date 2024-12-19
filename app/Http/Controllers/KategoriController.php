<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::paginate(10);
        return view ('admin.pages.kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.kategoriAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kategori' => 'required',
        ]);
        kategori::create($validate);
        return redirect()->route('admin.pages.kategori');
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
        $kategori = kategori::findOrFail($id);
        return view('admin.form.kategoriEdit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = kategori::findOrFail($id);
        $validate = $request->validate([
            'kategori' => 'required',
        ]);
        $kategori->update($validate);
        return redirect()->route('admin.pages.kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin.pages.kategori');
    }
}
