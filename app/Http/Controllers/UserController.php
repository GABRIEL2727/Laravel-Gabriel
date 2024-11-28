<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller {
   // Menampilkan semua data user
   public function index()
   {
       $users = user::all();
       return view('user.index', compact('users'));
   }

   // Menampilkan form untuk membuat user baru
   public function create()
   {
       return view('user.create');
   }

   // Menyimpan data user ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_user' => 'required|integer',
           'nama' => 'required|string|max:255', // Use string instead of varchar
           'username' => 'nullable|string', // Use string instead of varchar
           'password' => 'nullable|string|max:15', // Use string instead of varchar
           'level' => 'required|string', // Use string instead of varchar
       ]);

       user::create($validated);

       return redirect()->route('user.index')->with('success', 'user berhasil ditambahkan.');
   }

   // Menghapus data user dari database
   public function destroy(user $user)
   {
       $user->delete();

       return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus.');
   }

   // Show the edit form for a specific user
   public function edit($id)
   {
       $user = user::find($id);

       // Check if the user exists
       if (!$user) {
           return redirect()->route('user.index')->with('error', 'user not found.');
       }
       return view('user.edit', compact('user'));
   }

   public function update(user $user, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_user' => 'required|integer|max:100',
           'nama' => 'required|string|max:255', // Use string instead of varchar
           'username' => 'nullable|string', // Use string instead of varchar
           'password' => 'nullable|string|max:15', // Use string instead of varchar
           'level' => 'nullable|string|max:15', // Use string instead of varchar
       ]);

       // Update data user
       $user->update($validatedData);

       return redirect()->route('user.index')->with('success', 'user data successfully updated.');
   }
}
