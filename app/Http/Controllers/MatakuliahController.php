<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Matakuliah::with('prodi')->get(); 
        return view('matakuliah.index', compact('matakuliah')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('matakuliah.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'kode_mk' => 'required|unique:matakuliah',
            'nama' => 'required',
            'prodi_id' => 'required',
        ]);

        // Simpan data ke tabel matakuliah
        Matakuliah::create($input);

        // Redirect ke route matakuliah.index
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
        $matakuliah = Matakuliah::findOrFail($matakuliah->id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        $prodi = Prodi::all(); // ambil semua data prodi
        return view('matakuliah.edit', compact('matakuliah', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $input = $request->validate([
            'kode_mk' => 'required',
            'nama' => 'required',
            'prodi_id' => 'required',
        ]);

        // Update data ke tabel matakuliah
        $matakuliah->update($input);

        // Redirect ke route matakuliah.index
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah = Matakuliah::findOrFail($matakuliah->id);
        $matakuliah->delete(); // menghapus data matakuliah
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus.');
    }
}
