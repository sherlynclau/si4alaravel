<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesi = Sesi::all(); // Mengambil semua data sesi
        return view('sesi.index', compact('sesi')); // Mengirim data sesi ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sesi.create'); // Menampilkan form untuk membuat sesi baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $input = $request->validate([
            'nama' => 'required',
        ]);

        // Simpan data ke tabel sesi
        Sesi::create($input);

        // Redirect ke route sesi.index dengan pesan sukses
        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        // Mencari data sesi berdasarkan id
        $sesi = Sesi::findOrFail($sesi->id);
        
        // Mengirim data sesi ke view
        return view('sesi.show', compact('sesi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesi $sesi)
    {
        return view('sesi.edit', compact('sesi')); // Menampilkan form untuk mengedit sesi
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesi $sesi)
    {
        // Validasi input
        $input = $request->validate([
            'nama' => 'required',
        ]);

        // Update data sesi
        $sesi->update($input);

        // Redirect ke route sesi.index dengan pesan sukses
        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesi $sesi)
    {
        // Hapus sesi
        $sesi->delete();

        // Redirect ke route sesi.index dengan pesan sukses
        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil dihapus.');
    }
}
