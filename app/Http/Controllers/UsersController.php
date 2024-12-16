<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public  function create()
    {
        return view('admin.form.UserAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
          'name' => 'required',
          'email' => 'required', 
          'role' => 'required',
          'no_telp' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
            'role' => $request->role,
            'no_telp' => $request->no_telp
        ]);

        return redirect()->route('admin.pages.users')->with('success','user berhasil di tambah');
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
        $user = user::findOrFail($id);
        return view ('admin.form.UserEdit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable',
            'no_telp' => 'required',
            'role' => 'required'
        ]);
        $user->update($validate);
        return redirect()->route('admin.pages.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Temukan pengguna berdasarkan id atau tampilkan error jika tidak ditemukan
    $user = User::findOrFail($id);

    // Hapus pengguna dari database
    $user->delete();

    // Redirect ke halaman daftar user dengan pesan sukses
    return redirect()->route('admin.pages.users')->with('success', 'User berhasil dihapus');
    }
}
