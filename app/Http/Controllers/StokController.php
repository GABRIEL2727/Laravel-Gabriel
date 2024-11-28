<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;

class StokController extends Controller {
   // Menampilkan semua data stok
   public function index()
   {
       $stoks = stok::all();
       return view('stok.index', compact('stoks'));
   }

   // Menampilkan form untuk membuat stok baru
   public function create()
   {
       return view('stok.create');
   }

   // Menyimpan data stok ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'nullable|int|max:15',
           'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'nullable|int|max:15', // Max 15 for jml_masuk
           'jml_keluar' => 'nullable|int|max:15', // Max 15 for jml_keluar
           'total_barang' => 'nullable|string|max:255',
       ]);
   
       stok::create($validated);
   
       return redirect()->route('stok.index')->with('success', 'stok berhasil ditambahkan.');
   }
   

   // Menghapus data stok dari database
   public function destroy(stok $stok)
   {
       $stok->delete();

       return redirect()->route('stok.index')->with('success', 'Data stok berhasil dihapus.');
   }

   // Show the edit form for a specific stok
   public function edit($id)
   {
       $stok = stok::find($id);

       // Check if the stok exists
       if (!$stok) {
           return redirect()->route('stok.index')->with('error', 'Stok not found.');
       }
       return view('stok.edit', compact('stok'));
   }

   // Update data stok
   public function update(stok $stok, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_barang' => 'nullable|integer', // id_barang should be an integer
           'nama_barang' => 'required|string|max:255', // nama_barang is required and should be a string
           'jml_masuk' => 'nullable|integer|max:15', // jumlah masuk is optional and should be an integer
           'jml_keluar' => 'nullable|integer|max:15', // jumlah keluar is optional and should be an integer
           'total_barang' => 'nullable|integer', // total_barang can be an integer (nullable)
       ]);

       // Update data stok
       $stok->update($validatedData);

       return redirect()->route('stok.index')->with('success', 'Stok data successfully updated.');
   }
}
