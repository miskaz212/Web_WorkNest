<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\Pekerja;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PekerjaController extends Controller
{
public function index()
{
    $user = Auth::user();

    if ($user->isAdmin()) {
        $pekerja = Pekerja::with('category', 'loker', 'user')->get();
    } else {
        $pekerja = Pekerja::where('user_id', $user->id)
            ->with('category', 'loker', 'user')
            ->get();
    }

    return view('datapekerja', compact('pekerja'));
}

//melihat detail pekerja
    public function detail($id)
    {
        $pekerja = Pekerja::with('category', 'loker')->find($id);

        return view('detailpekerja', compact('pekerja'));
    }

    public function create($loker_id)
    {
        $user = Auth::user();

        if (Auth::check()) {
            $categories = Category::all();
            $loker = Loker::findOrFail($loker_id);
        }

        return view('inputpekerja', compact('categories', 'loker', 'user'));
    }

//penyimpan data
public function store(Request $request)
{
    // Verifikasi apakah user terotentikasi
    if (Auth::check()) {
        $user = Auth::user(); // Get the authenticated user

        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
        $filename = $randomName . '.' . $fileExtension;

        // Simpan file foto ke folder public/images
        $request->file('foto_sampul')->move(public_path('images'), $filename);

        // Simpan data ke tabel pekerja dengan user_id
        Pekerja::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'ktp' => $request->ktp,
            'alamat' => $request->alamat,
            'category_id' => $request->category_id,
            'loker_id' => $request->loker_id,
            'foto_sampul' => $filename,
        ]);

        return redirect()->route('pekerja.index')->with('success', 'Data pekerja berhasil ditambahkan!');
    } else {
        return redirect()->route('login'); // Redirect ke halaman login jika user tidak terotentikasi
    }
}
//editdata
public function edit($id, Request $request)
    {
        $loker_id = $request->input('loker_id');
        $pekerja = Pekerja::findOrFail($id);
        $categories = Category::all();
        $loker = Loker::findOrFail($loker_id);

        return view('editpekerja', compact('pekerja', 'categories', 'loker'));
    }

//update data
    public function update(Request $request, Pekerja $pekerja)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'ktp' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'category_id' => 'required|integer',
        'loker_id' => 'required|string|max:255',
        'foto_sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Periksa apakah ada file foto baru diunggah
    if ($request->hasFile('foto_sampul')) {
        // Hapus file lama jika ada
        if (file_exists(public_path('images/' . $pekerja->foto_sampul))) {
            unlink(public_path('images/' . $pekerja->foto_sampul));
        }

        // Simpan file foto baru
        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
        $filename = $randomName . '.' . $fileExtension;
        $request->file('foto_sampul')->move(public_path('images'), $filename);

        // Update nama file baru
        $pekerja->update(['foto_sampul' => $filename]);
    }

    // Update data pekerja
    $pekerja->update([
        'nama' => $request->nama,
        'ktp' => $request->ktp,
        'alamat' => $request->alamat,
        'category_id' => $request->category_id,
        'loker_id' => $request->loker_id,
    ]);

    return redirect()->route('pekerja.index')->with('success', 'Data pekerja berhasil diperbarui!');
}
//print data
    public function print($id)
    {
        $pekerja = Pekerja::with('category', 'loker')->find($id);

        return view('printpekerja', compact('pekerja'));
    }

//hapus data
    public function destroy(Pekerja $pekerja)
    {
        // Hapus file foto sebelum menghapus data
        if (file_exists(public_path('images/' . $pekerja->foto_sampul))) {
            unlink(public_path('images/' . $pekerja->foto_sampul));
        }

        $pekerja->delete();

        return redirect()->route('pekerja.index')->with('success', 'Data pekerja berhasil dihapus!');
    }
}
