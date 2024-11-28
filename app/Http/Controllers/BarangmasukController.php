<?php


namespace App\Http\Controllers;


use App\Models\barang_masuk;
use Illuminate\Http\Request;


class BarangmasukController extends Controller {
   //Menampilkan semua data barang_masuk
   public function index()
   {
       $barang_masuks = barang_masuk::all();
       return view('barang_masuk.index', compact('barang_masuks'));
   }


   //Menampilkan form untuk membuat barang_masuk baru
   public function create()
   {
       return view('barang_masuk.create');
   }


   // Menyimpan data barang_masuk ke database
   public function store(Request $request)
   {
    $validated = $request->validate([
        'id_barang' => 'required|integer',
        'nama_barang' => 'required|string|max:255',
        'tgl_masuk' => 'required|string', // Jika tanggal disimpan sebagai string
        'jml_masuk' => 'required|integer',
        'id_suplier' => 'required|integer',
    ]);
    


       barang_masuk::create($validated);


       return redirect()->route('barang_masuk.index')->with('success', 'barang_masuk berhasil ditambahkan.');
   }


   // Menghapus data barang_masuk dari database
   public function destroy(barang_masuk $barang_masuk)
   {
       $barang_masuk->delete();


       return redirect()->route('barang_masuk.index')->with('success', 'Data barang_masuk berhasil dihapus.');
   }


   // Show the edit form for a specific barang_masuk
   public function edit($id)
   {
       $barang_masuk = barang_masuk::find($id);


       // Check if the barang_masuk exists
       if (!$barang_masuk) {
           return redirect()->route('barang_masuk.index')->with('error', 'barang_masuk not found.');
       }
       return view('barang_masuk.edit', compact('barang_masuk'));
   }


   public function update(barang_masuk $barang_masuk, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_barang' => 'required|integer',
        'nama_barang' => 'required|string|max:255',
        'tgl_masuk' => 'required|string', // Jika tanggal disimpan sebagai string
        'jml_masuk' => 'required|integer',
        'id_suplier' => 'required|integer',
       ]);


       // Update data barang_masuk
       $barang_masuk->update($validatedData);


       return redirect()->route('barang_masuk.index')->with('success', 'barang_masuk data successfully updated.');
   }
}
