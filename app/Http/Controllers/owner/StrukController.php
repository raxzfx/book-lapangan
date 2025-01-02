<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class StrukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $booking = Booking::with('lapangan')->find($id);

    if (!$booking || $booking->status !== 'confirmed') {
        return redirect()->route('owner.pages.bookingConfirm')->with('error', 'Booking tidak valid atau belum dikonfirmasi.');
    }

    return view('owner.pages.struk', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
