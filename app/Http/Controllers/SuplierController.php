<?php


namespace App\Http\Controllers;


use App\Models\Suplier;
use Illuminate\Http\Request;


class SuplierController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $supliers = suplier::all();
       return view('suplier.index', compact('supliers'));
   }


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('suplier.create');
   }


   // Menyimpan data suplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_suplier' => 'required|integer',
           'nama_suplier' => 'required|string|max:255',
           'alamat_suplier' => 'nullable|string',
           'telepon_suplier' => 'nullable|string|max:15',
       ]);


       suplier::create($validated);


       return redirect()->route('suplier.index')->with('success', 'suplier berhasil ditambahkan.');
   }


   // Menghapus data suplier dari database
   public function destroy(suplier $suplier)
   {
       $suplier->delete();


       return redirect()->route('suplier.index')->with('success', 'Data suplier berhasil dihapus.');
   }


   // Show the edit form for a specific suplier
   public function edit($id)
   {
       $suplier = suplier::find($id);


       // Check if the suplier exists
       if (!$suplier) {
           return redirect()->route('suplier.index')->with('error', 'suplier not found.');
       }
       return view('suplier.edit', compact('suplier'));
   }


   public function update(suplier $suplier, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'nama_suplier' => 'required|string|max:255',
           'alamat_suplier' => 'nullable|string',
           'telepon_suplier' => 'nullable|string|max:15',
       ]);


       // Update data suplier
       $suplier->update($validatedData);


       return redirect()->route('suplier.index')->with('success', 'suplier data successfully updated.');
   }
}
