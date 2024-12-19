<?php

namespace App\Http\Controllers;

use App\Models\ownerLapangan;
use App\Models\lapangan;
use Illuminate\Http\Request;

class OwnerLapangController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ownerLapang = ownerLapangan::with('Lapangan')->paginate(10);
        return view ('admin.pages.ownerLapang',compact('ownerLapang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lapangan = lapangan::all();
        return view('admin.form.ownerLapangAdd',compact('lapangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nama_lapangan' => 'required',
        ]);

        ownerLapangan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama_lapangan' => $request->nama_lapangan,
        ]);

        return redirect()->route('admin.pages.ownerLapang')->with('success','owner lapangan sukses di buat');
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
        $lapangan = lapangan::all();
        $ownerLapangs = ownerLapangan::find($id);
        return view('admin.form.ownerLapangEdit',compact('ownerLapangs','lapangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nama_lapangan' => 'required',
        ]);

        $ownerLapang = ownerLapangan::find($id);
        $ownerLapang->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama_lapangan' => $request->nama_lapangan,
        ]);

        return redirect()->route('admin.pages.ownerLapang')->with('success','owner lapangan sukses di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ownerLapang = ownerLapangan::find($id);
        $ownerLapang->delete();
        return redirect()->route('admin.pages.ownerLapang')->with('success','owner lapangan sukses di hapus');
    }
}
