<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Loker;
use Illuminate\Http\File as HttpFile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class LokerController extends Controller
{

    public function index()
    {

        $query = Loker::latest();
        if (request('search')) {
            $query->where('nama_loker', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }
        $lokers = $query->paginate(6)->withQueryString();
        return view('/manager/homepage', compact('lokers'));
    }

    public function detail($id)
    {
        $loker = Loker::find($id);
        return view('/detail', compact('loker'));
    }

    //proses membuat data
    public function create(){
        $categories = Category::all();
        return view('/manager/input', compact('categories'));
    }

    //proses menambahkan data
    public function store(Request $request){

        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
        $filename = $randomName . '.' . $fileExtension;

        //simpan file foto ke folder public/images
        $request->file('foto_sampul')->move(public_path('images'), $filename);

        //simpan data ke tabel lokers
        Loker::create([
            'id'=>$request->id,
            'nama_loker'=>$request->nama_loker,
            'category_id'=>$request->category_id,
            'deskripsi'=>$request->deskripsi,
            'gaji'=>$request->gaji,
            'kontrak_kerja'=>$request->kontrak_kerja,
            'foto_sampul'=> $filename
        ]);

        return redirect('/manager/homepage')->with('success', 'data berhasil disimpan');
    }

    //check data yang ada
    public function dataLoker(){

        $query = Loker::latest();
        if (request('search')) {
            $query->where('nama_loker', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }
        $lokers = $query->paginate(6)->withQueryString();
        return view('/manager/data', compact('lokers'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $loker = Loker::find($id);
        return view('/manager/edit', compact('loker', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_loker' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'deskripsi' => 'required|string',
            'gaji' => 'required|integer',
            'kontrak_kerja' => 'required|string',
            'foto_sampul' => 'images|mimes:jpeg,png,jpg,gif,svg|max:2048', // Correct typo in 'foto_sampul'
        ]);

    if ($validator->fails()) {
    return redirect()->route('edit.loker', ['id' => $id])
        ->withErrors($validator)
        ->withInput();
}


        $loker = Loker::findOrFail($id);

        if ($request->hasFile('foto_sampul')) {
            $randomName = Str::uuid()->toString();
            $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
            $fileName = $randomName . '.' . $fileExtension;

            // Move the new file to the images folder
            $request->file('foto_sampul')->move(public_path('images'), $fileName);

            // Delete the old image (if exists)
            if (File::exists(public_path('images/' . $loker->foto_sampul))) {
                File::delete(public_path('images/' . $loker->foto_sampul));
            }

            $loker->update([
                'nama_loker' => $request->nama_loker,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id,
                'gaji' => $request->gaji,
                'kontrak_kerja' => $request->kontrak_kerja,
                'foto_sampul' => $fileName,
            ]);
        } else {
            $loker->update([
                'nama_loker' => $request->nama_loker,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id,
                'gaji' => $request->gaji,
                'kontrak_kerja' => $request->kontrak_kerja,

            ]);
        }

        return redirect('/lokers/data')->with('success', 'Data berhasil diperbarui');
    }

public function delete($id)
{
    $loker = Loker::findOrFail($id);

    // Delete the loker's photo if it exists
    if ($loker->foto_sampul && File::exists(public_path('images/' . $loker->foto_sampul))) {
        File::delete(public_path('images/' . $loker->foto_sampul));
    }

    // Delete the loker record from the database
    $loker->delete();

    return redirect('/lokers/data')->with('success', 'Data berhasil dihapus');
}

}
