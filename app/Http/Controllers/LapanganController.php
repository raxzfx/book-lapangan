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
            'kota' => 'required|string',
            'lokasi' => 'required|string',
            'harga_perjam' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

         // Proses upload gambar
    $imagePath = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/lapangan'), $imageName); // Simpan ke folder uploads/lapangan
    }

    // Simpan data ke database
    Lapangan::create([
        'nama_lapangan' => $request->nama_lapangan,
        'kota' => $request->kota,
        'lokasi' => $request->lokasi,
        'harga_perjam' => $request->harga_perjam,
        'kategori_lapangan' => $request->kategori_lapangan,
        'image' => $imageName , // Simpan path gambar
        'deskripsi' => $request->deskripsi,
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
        'kota' => 'required|string',
        'harga_perjam' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Gambar opsional
        'deskripsi' => 'required|string',
    ]);

    $lapang = Lapangan::find($id);
    
    if (!$lapang) {
        return redirect()->route('admin.pages.lapangan')->with('error', 'Lapangan tidak ditemukan');
    }

    // Proses upload gambar jika ada file gambar baru
    $imageName = $lapang->image; // Default menggunakan gambar lama
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if (file_exists(public_path('uploads/lapangan/' . $lapang->image))) {
            unlink(public_path('uploads/lapangan/' . $lapang->image)); // Hapus gambar lama
        }

        // Upload gambar baru
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/lapangan'), $imageName); // Simpan gambar baru
    }

    // Update data lapangan
    $lapang->update([
        'nama_lapangan' => $request->nama_lapangan,
        'kategori_lapangan' => $request->kategori_lapangan,
        'lokasi' => $request->lokasi,
        'kota' => $request->kota,
        'harga_perjam' => $request->harga_perjam,
        'image' => $imageName, // Simpan gambar baru atau gambar lama
        'deskripsi' => $request->deskripsi
    ]);


   

    return redirect()->route('admin.pages.lapangan')->with('success', 'Lapangan sukses diubah');
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
