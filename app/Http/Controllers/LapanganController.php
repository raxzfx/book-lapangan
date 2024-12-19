<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\kategori;


class LapanganController
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
       $lapangan = Lapangan::with('kategori')->paginate(10);
        return view ('admin.pages.lapangan',compact('lapangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = kategori::all();
        return view('admin.form.lapanganAdd', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'kategori_lapangan' => 'required|exists:kategori,id',
            'lokasi' => 'required|string',
            'harga_perjam' => 'required|numeric',
        ]);

        

        Lapangan::create([
           'nama_lapangan'=> $request->nama_lapangan,
           'kategori_lapangan' => $request->kategori_lapangan,
           'lokasi' => $request->lokasi,
           'harga_perjam'=> $request->harga_perjam
        ]);

        return redirect()->route('admin.pages.lapangan')->with('success','lapangan sukses di buat');
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
        $kategori = kategori::all();
        $lapang = Lapangan::find($id);
        return view('admin.form.lapanganEdit', compact('lapang','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'kategori_lapangan' => 'required|exists:kategori,id',
            'lokasi' => 'required|string',
            'harga_perjam' => 'required|numeric',
        ]);

        $lapang = Lapangan::find($id);
        $lapang->update([
            'nama_lapangan'=> $request->nama_lapangan,
            'kategori_lapangan' => $request->kategori_lapangan,
            'lokasi' => $request->lokasi,
            'harga_perjam'=> $request->harga_perjam
        ]);

        return redirect()->route('admin.pages.lapangan')->with('success','lapangan sukses di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lapang = Lapangan::find($id);
        $lapang->delete();
        return redirect()->route('admin.pages.lapangan')->with('success','lapangan sukses di hapus');
    }
}
