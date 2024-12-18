<?php

namespace App\Http\Controllers;

use App\Models\PenaModel;
use Illuminate\Http\Request;

class PenaController extends Controller
{



       // Menampilkan semua data mahasiswa
       public function index()
       {
           $data = PenaModel::all();
           return view('pages3.pena.index', ['data' => $data]);
       }
   
       // Menampilkan form untuk menambahkan data mahasiswa baru
       public function createForm()
       {
           return view('pages3.pena.create');
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
       PenaModel::create([
           'ukm' => $request->input('ukm'),
           'pengurus' => $request->input('pengurus'),
           'jabatan' => $request->input('jabatan'),
       ]);
       
       // Redirect dengan pesan sukses
       return redirect()->route('getalldatapena')->with('success', 'Data mahasiswa berhasil ditambahkan.');
   }
   
       // Mendapatkan data mahasiswa berdasarkan ID untuk form edit
       public function getDataById($id)
       {
           $data = PenaModel::findOrFail($id);
           return view('pages3.pena.edit', ['data' => $data]);
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
           $data = PenaModel::findOrFail($id);
           $data->update([
               'ukm' => $request->input('ukm'),
               'pengurus' => $request->input('pengurus'),
               'jabatan' => $request->input('jabatan'),
           ]);
   
           return redirect()->route('getalldatapena')->with('success', 'Data mahasiswa berhasil diupdate.');
       }
   
       // Menghapus data mahasiswa dari database
       public function deleteData($id)
       {
           $data = PenaModel::findOrFail($id);
           $data->delete();
   
           return redirect()->route('getalldatapena')->with('success', 'Data mahasiswa berhasil dihapus.');
       }
   
}
