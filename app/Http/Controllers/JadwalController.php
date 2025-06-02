<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Matakuliah;
use App\Models\Sesi;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matakuliah = Matakuliah::all();
        $sesi = Sesi::all();
        $dosen = User::where('role', 'dosen')->get();
        $jadwal = Jadwal::all(); // Mengambil semua data jadwal untuk form create
        return view('jadwal.create', compact('jadwal','matakuliah', 'sesi', 'dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'tahun_akademik' => 'required',
            'kode_smt' => 'required',
            'kelas' => 'required',
            'matakuliah_id' => 'required',
            'dosen_id' => 'required',
            'sesi_id' => 'required',
        ]);

        // Simpan data ke tabel jadwal
        Jadwal::create($input);

        // Redirect ke route jadwal.index
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        $jadwal = Jadwal::findOrFail($jadwal->id); // Mencari data jadwal berdasarkan id
        return view('jadwal.show', compact('jadwal')); // Mengirim data ke view jadwal.show
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        $matakuliah = Matakuliah::all(); // Mengambil semua data matakuliah
        $sesi = Sesi::all(); // Mengambil semua data sesi
        $dosen = User::where('role', 'dosen')->get(); // Mengambil semua data dosen
        return view('jadwal.edit', compact('jadwal', 'matakuliah', 'sesi', 'dosen')); // Mengirim data ke view jadwal.edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $input = $request->validate([
            'tahun_akademik' => 'required',
            'kode_smt' => 'required',
            'kelas' => 'required',
            'matakuliah_id' => 'required',
            'dosen_id' => 'required',
            'sesi_id' => 'required',
        ]);

        // Update data jadwal
        $jadwal->update($input);

        // Redirect ke route jadwal.index
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete(); // Menghapus data jadwal
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.'); // Redirect ke route jadwal.index
    }
}
