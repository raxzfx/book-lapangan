<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class TestBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data booking dengan relasi lapangan
        $booking = Booking::with('lapangan')->get();

        // Menghitung harga total untuk setiap booking
        foreach ($booking as $book) {
            // Mengalikan harga perjam lapangan dengan durasi yang dipilih
            $book->total_harga = $book->lapangan->harga_perjam * $book->durasi;
        }

        return view('owner.pages.bookingTest', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lapang = Lapangan::all();
        return view('owner.form.testBooking', compact('lapang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'lapangan_id' => 'required|exists:lapangan,id',
            'durasi' => 'required|integer|min:1',
            'tanggal_booking' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
        ]);
        
        // Cek ketersediaan lapangan
        $isAvailable = Booking::where('lapangan_id', $request->lapangan_id)
            ->where('tanggal_booking', $request->tanggal_booking)
            ->where(function ($query) use ($request) {
                $query->whereBetween('waktu_mulai', [$request->waktu_mulai, $request->waktu_selesai])
                      ->orWhereBetween('waktu_selesai', [$request->waktu_mulai, $request->waktu_selesai])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('waktu_mulai', '<=', $request->waktu_mulai)
                                ->where('waktu_selesai', '>=', $request->waktu_selesai);
                      });
            })
            ->exists();
    
        if ($isAvailable) {
            return back()->with('error', 'Lapangan sudah terbooking pada waktu yang dipilih. Silakan pilih waktu lain.');
        }
    
        // Generate kode booking unik
        $kodeBooking = Booking::generateKodeBooking();
    
        // Generate kode pembayaran dengan format cfm01, cfm02, ...
        $lastPaymentCode = Booking::latest('id')->first(); // Ambil booking terakhir
        $nextPaymentCode = $lastPaymentCode ? 'cfm' . str_pad(substr($lastPaymentCode->kode_pembayaran, 3) + 1, 2, '0', STR_PAD_LEFT) : 'cfm01';
    
        // Simpan data booking
        Booking::create([
            'kode_booking' => $kodeBooking,
            'kode_pembayaran' => $nextPaymentCode, // Menyimpan kode pembayaran
            'nama_pemesan' => $request->nama_pemesan,
            'lapangan_id' => $request->lapangan_id,
            'durasi' => $request->durasi,
            'tanggal_booking' => $request->tanggal_booking,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
        ]);
    
        return redirect()->route('owner.pages.testBooking')->with('success', 'Booking berhasil dibuat!');
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
        //
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
