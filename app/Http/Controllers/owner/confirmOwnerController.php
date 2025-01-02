<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class confirmOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Cek jika ada query pencarian
        $search = $request->get('search');
        
        if ($search) {
            // Cari berdasarkan nama pemesan atau kode booking
            $booking = Booking::with('lapangan')
                ->where('nama_pemesan', 'like', '%' . $search . '%')
                ->orWhere('kode_booking', 'like', '%' . $search . '%')
                ->get();
        } else {
            // Jika tidak ada pencarian, tampilkan semua booking
            $booking = Booking::with('lapangan')->get();
        }

        return view('owner.pages.bookingConfirm', compact('booking'));
    }

    public function confirm($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'confirmed';
        $booking->save();

        return redirect()->back()->with('success', 'booking telah di konfirmasi');
    }

    public function cancel($id)
    {
        // Temukan booking berdasarkan ID
        $booking = Booking::find($id);

        // Update status menjadi 'cancelled'
        $booking->status = 'cancelled';
        
        // Menghapus data booking yang dibatalkan
        $booking->delete();

        return redirect()->back()->with('success', 'Booking telah dibatalkan dan dihapus');
    }
}
