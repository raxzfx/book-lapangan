<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class DetailLapang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
        $lapangan = Lapangan::with('kategori')->findOrFail($id);
        return view('user.pages.detailFields',compact('lapangan'));
    }

}
