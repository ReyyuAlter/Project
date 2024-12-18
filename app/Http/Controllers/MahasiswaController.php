<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        $data = MahasiswaModel::all();
        return view('pages.mahasiswa.index', ['data' => $data]);
    }

    // Menampilkan form untuk menambahkan data mahasiswa baru
    public function createForm()
    {
        return view('pages.mahasiswa.create');
    }

   // Menyimpan data mahasiswa baru ke database
public function createData(Request $request)
{
    // Validasi data input dengan pesan khusus
    $request->validate([
        'nim' => 'required|unique:mahasiswa,nim', // Nama tabel 'mahasiswa' harus sesuai dengan tabel di database
        'name' => 'required|string|max:255',
        'prodi' => 'required|string|max:255',
    ], [
        'nim.unique' => 'NIM telah terpakai.' // Pesan error khusus untuk NIM
    ]);

    // Membuat dan menyimpan data baru
    MahasiswaModel::create([
        'name' => $request->input('name'),
        'nim' => $request->input('nim'),
        'prodi' => $request->input('prodi'),
    ]);
    
    // Redirect dengan pesan sukses
    return redirect()->route('getalldatamahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan.');
}

    // Mendapatkan data mahasiswa berdasarkan ID untuk form edit
    public function getDataById($id)
    {
        $data = MahasiswaModel::findOrFail($id);
        return view('pages.mahasiswa.edit', ['data' => $data]);
    }

    // Mengupdate data mahasiswa di database
    public function updateData(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,' . $id, // Kecualikan nim yang sedang diupdate
            'name' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
        ], [
            'nim.unique' => 'NIM telah terpakai.' // Pesan error khusus untuk NIM
        ]);

        // Mengupdate data yang ada
        $data = MahasiswaModel::findOrFail($id);
        $data->update([
            'name' => $request->input('name'),
            'nim' => $request->input('nim'),
            'prodi' => $request->input('prodi'),
        ]);

        return redirect()->route('getalldatamahasiswa')->with('success', 'Data mahasiswa berhasil diupdate.');
    }

    // Menghapus data mahasiswa dari database
    public function deleteData($id)
    {
        $data = MahasiswaModel::findOrFail($id);
        $data->delete();

        return redirect()->route('getalldatamahasiswa')->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    // Menampilkan jumlah mahasiswa di dashboard
    public function dashboard()
    {
        $jumlahMahasiswa = MahasiswaModel::count();
        return view('pages.dashboard', compact('jumlahMahasiswa'));
    }

    public function searchMahasiswa(Request $request)
    {
        $search = $request->input('search');
    
        // Query untuk mendapatkan data mahasiswa berdasarkan pencarian
        $data = MahasiswaModel::query()
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('nim', 'like', '%' . $search . '%')
                      ->orWhere('prodi', 'like', '%' . $search . '%');
            })
            ->orderByRaw("CASE 
                WHEN name LIKE ? THEN 1 
                WHEN nim LIKE ? THEN 2 
                WHEN prodi LIKE ? THEN 3 
                ELSE 4 
            END", ["%$search%", "%$search%", "%$search%"])
            ->get();
    
        return view('pages.mahasiswa.index', compact('data'));
    }
    
}
