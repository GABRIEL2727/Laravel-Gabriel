@extends('layouts.app')


@section('content')
<!-- component -->


@if ($errors->any())
   <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif


<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">
 <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border px-6 py-6">
   {{-- Form --}}
   <form action="{{ route('pinjam_barang.update', $pinjam_barang->id) }}" method="POST">
     @csrf
     @method('put')
     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base/7 font-semibold text-gray-900">Edit user Data</h2>
       <p class="mt-1 text-sm/6 text-gray-600">Update the necessary information carefully.</p>


       <div class="mt-10 col-span-full gap-y-8">
         <label for="id_pinjam" class="block text-sm/6 font-medium text-gray-900">ID pinjam</label>
         <div class="mt-2">
           <input id="id_pinjam" name="id_pinjam" type="text" value="{{ old('id_pinjam', $pinjam_barang->id_pinjam) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" readonly>
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="peminjam" class="block text-sm/6 font-medium text-gray-900">peminjam</label>
         <div class="mt-2">
           <input id="peminjam" name="peminjam" type="text" value="{{ old('peminjam', $pinjam_barang->peminjam) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="tanggal_pinjam" class="block text-sm/6 font-medium text-gray-900">tanggal pinnjam</label>
         <div class="mt-2">
           <textarea id="tanggal_pinjam" name="tanggal_pinjam" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ old('tanggal_pinjam', $pinjam_barang->tanggal_pinjam) }}</textarea>
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="id_barang" class="block text-sm/6 font-medium text-gray-900">id barang</label>
         <div class="mt-2">
           <input id="id_barang" name="id_barang" type="text" value="{{ old('id_barang', $pinjam_barang->id_barang) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>
       <div class="mt-10 col-span-full gap-y-8">
        <label for="nama_barang" class="block text-sm/6 font-medium text-gray-900">nama barang</label>
        <div class="mt-2">
          <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang', $pinjam_barang->nama_barang) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" readonly>
        </div>
      </div>
      <div class="mt-10 col-span-full gap-y-8">
        <label for="jml_barang" class="block text-sm/6 font-medium text-gray-900">jumlah barangr</label>
        <div class="mt-2">
          <input id="jml_barang" name="jml_barang" type="text" value="{{ old('jml_barang', $pinjam_barang->jml_barang) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" readonly>
        </div>
      </div>
      <div class="mt-10 col-span-full gap-y-8">
        <label for="tgl_kembali" class="block text-sm/6 font-medium text-gray-900">tanggal kembali</label>
        <div class="mt-2">
          <input id="tgl_kembali" name="tgl_kembali" type="text" value="{{ old('tgl_kembali', $pinjam_barang->tgl_kembali) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" readonly>
        </div>
      </div>
     </div>


     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
     </div>
   </form>
 </div>
</div>
@endsection
