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
        $users = User::paginate(10);
        return view('admin.pages.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public  function create()
    {
        $roleOption = ['admin' ,'ownerLapang'];
        return view('admin.form.UserAdd',compact('roleOption'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
          'name' => 'required',
          'email' => 'required', 
          'role' => 'required|in:admin,ownerLapang',
          'password' => 'nullable|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
            'role' => $request->role,
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
        $user = User::findOrFail($id); // Temukan data user berdasarkan ID
        $roleOption = ['admin', 'ownerLapang']; // Pilihan role
        return view('admin.form.UserEdit', compact('user', 'roleOption'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
    
        // Validasi data yang diterima
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'role' => 'required|in:admin,ownerLapang', // Pastikan role valid
            'password' => 'nullable|min:8', // Password opsional
        ]);
    
        // Update data user
        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->no_telp = $validate['no_telp'];
        $user->role = $validate['role'];
    
        // Update password hanya jika diisi
        if (!empty($validate['password'])) {
            $user->password = Hash::make($validate['password']);
        }
    
        $user->save(); // Simpan perubahan ke database
    
        return redirect()->route('admin.pages.users')->with('success', 'Data user berhasil diupdate!');
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
