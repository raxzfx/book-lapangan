<?php

namespace App\Http\Controllers;

use App\Models\ownerLapangan;
use Illuminate\Http\Request;

class OwnerLapangController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owner = ownerLapangan::paginate(10);
        return view ('admin.pages.ownerLapang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.ownerLapangAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.form.fasilitasEdit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
