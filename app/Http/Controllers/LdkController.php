<?php

namespace App\Http\Controllers;

use App\Models\LdkModel;
use Illuminate\Http\Request;

class LdkController extends Controller
{
     // Menampilkan semua data mahasiswa
     public function index()
     {
         $data = LdkModel::all();
         return view('pages7.ldk.index', ['data' => $data]);
     }
 
     // Menampilkan form untuk menambahkan data mahasiswa baru
     public function createForm()
     {
         return view('pages7.ldk.create');
     }
 
    // Menyimpan data mahasiswa baru ke database
 public function createData(Request $request)
 {
     // Validasi data input dengan pesan khusus
     $request->validate([
         'ukm' => 'required|string|max:255', // Nama tabel 'mahasiswa' harus sesuai dengan tabel di database
         'pengurus' => 'required|string|max:255',
         'jabatan' => 'required|string|max:255',
  
         
     ]);
 
     // Membuat dan menyimpan data baru
     LdkModel::create([
         'ukm' => $request->input('ukm'),
         'pengurus' => $request->input('pengurus'),
         'jabatan' => $request->input('jabatan'),
     ]);
     
     // Redirect dengan pesan sukses
     return redirect()->route('getalldataldk')->with('success', 'Data mahasiswa berhasil ditambahkan.');
 }
 
     // Mendapatkan data mahasiswa berdasarkan ID untuk form edit
     public function getDataById($id)
     {
         $data = LdkModel::findOrFail($id);
         return view('pages7.ldk.edit', ['data' => $data]);
     }
 
     // Mengupdate data mahasiswa di database
     public function updateData(Request $request, $id)
     {
         // Validasi data input
         $request->validate([
             'pengurus' => 'required|string|max:255', // Kecualikan nim yang sedang diupdate
             'ukm' => 'required|string|max:255',
             'jabatan' => 'required|string|max:255',
        
         ]);
 
         // Mengupdate data yang ada
         $data = LdkModel::findOrFail($id);
         $data->update([
             'ukm' => $request->input('ukm'),
             'pengurus' => $request->input('pengurus'),
             'jabatan' => $request->input('jabatan'),
         ]);
 
         return redirect()->route('getalldataldk')->with('success', 'Data mahasiswa berhasil diupdate.');
     }
 
     // Menghapus data mahasiswa dari database
     public function deleteData($id)
     {
         $data = LdkModel::findOrFail($id);
         $data->delete();
 
         return redirect()->route('getalldataldk')->with('success', 'Data mahasiswa berhasil dihapus.');
     }
}
