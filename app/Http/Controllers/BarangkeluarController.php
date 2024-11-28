<?php


namespace App\Http\Controllers;


use App\Models\barang_keluar;
use Illuminate\Http\Request;


class BarangkeluarController extends Controller {
   //Menampilkan semua data barang_keluar
   public function index()
   {
       $barang_keluars = barang_keluar::all();
       return view('barang_keluar.index', compact('barang_keluars'));
   }


   //Menampilkan form untuk membuat barang_keluar baru
   public function create()
   {
       return view('barang_keluar.create');
   }


   // Menyimpan data barang_keluar ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'tgl_keluar' => 'nullable|string',
           'jml_keluar' => 'nullable|integer|max:255',
           'lokasi' => 'nullable|string|max:255',
           'penerima' => 'nullable|string|max:255',
        ]);


       barang_keluar::create($validated);


       return redirect()->route('barang_keluar.index')->with('success', 'barang_keluar berhasil ditambahkan.');
   }


   // Menghapus data barang_keluar dari database
   public function destroy(barang_keluar $barang_keluar)
   {
       $barang_keluar->delete();


       return redirect()->route('barang_keluar.index')->with('success', 'Data barang_keluar berhasil dihapus.');
   }


   // Show the edit form for a specific barang_keluar
   public function edit($id)
   {
       $barang_keluar = barang_keluar::find($id);


       // Check if the barang_keluar exists
       if (!$barang_keluar) {
           return redirect()->route('barang_keluar.index')->with('error', 'barang_keluar not found.');
       }
       return view('barang_keluar.edit', compact('barang_keluar'));
   }


   public function update(barang_keluar $barang_keluar, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'tgl_keluar' => 'required|string',
           'jml_keluar' => 'nullable|integer|max:255',
           'lokasi' => 'nullable|string|max:255',
           'penerima' => 'nullable|string|max:255',
       ]);


       // Update data barang_keluar
       $barang_keluar->update($validatedData);


       return redirect()->route('barang_keluar.index')->with('success', 'barang_keluar data successfully updated.');
   }
}
