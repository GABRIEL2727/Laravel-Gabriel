<?php


namespace App\Http\Controllers;


use App\Models\pinjam_barang;
use Illuminate\Http\Request;


class PinjambarangController extends Controller {
   //Menampilkan semua data pinjam_barang
   public function index()
   {
       $pinjam_barangs = pinjam_barang::all();
       return view('pinjam_barang.index', compact('pinjam_barangs'));
   }


   //Menampilkan form untuk membuat pinjam_barang baru
   public function create()
   {
       return view('pinjam_barang.create');
   }


   // Menyimpan data pinjam_barang ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_pinjam' => 'required|integer',
           'peminjam' => 'required|string|max:255',
           'tanggal_pinjam' => 'required|string',
           'id_barang' => 'required|integer|max:15',
           'nama_barang' => 'required|string',
           'jml_barang' => 'required|integer|max:255',
           'tgl_kembali' => 'required|string',
           'kondisi' => 'nullable|string|max:255',
        ]);


       pinjam_barang::create($validated);


       return redirect()->route('pinjam_barang.index')->with('success', 'pinjam_barang berhasil ditambahkan.');
   }


   // Menghapus data pinjam_barang dari database
   public function destroy(pinjam_barang $pinjam_barang)
   {
       $pinjam_barang->delete();


       return redirect()->route('pinjam_barang.index')->with('success', 'Data pinjam_barang berhasil dihapus.');
   }


   // Show the edit form for a specific pinjam_barang
   public function edit($id)
   {
       $pinjam_barang = pinjam_barang::find($id);


       // Check if the pinjam_barang exists
       if (!$pinjam_barang) {
           return redirect()->route('pinjam_barang.index')->with('error', 'pinjam_barang not found.');
       }
       return view('pinjam_barang.edit', compact('pinjam_barang'));
   }


   public function update(pinjam_barang $pinjam_barang, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_pinjam' => 'required|integer',
           'peminjam' => 'required|string|max:255',
           'tanggal_pinjam' => 'required|string',
           'id_barang' => 'required|integer|max:15',
           'nama_barang' => 'required|string',
           'jml_barang' => 'required|integer|max:255',
           'tgl_kembali' => 'required|string',
           'kondisi' => 'nullable|string|max:255',
       ]);


       // Update data pinjam_barang
       $pinjam_barang->update($validatedData);


       return redirect()->route('pinjam_barang.index')->with('success', 'pinjam_barang data successfully updated.');
   }
}
