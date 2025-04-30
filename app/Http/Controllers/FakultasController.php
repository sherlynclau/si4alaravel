<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //menampilkan list data dari tabel fakultas
    {
        //panggil model Fakultas menggunakan eloquent
        $fakultas = Fakultas::all(); // perintah select * from fakultas (panggil model lalu panggil all)
        //dd($fakultas); //dump and die
        return view('fakultas.index', compact('fakultas')); //mengirim data ke view fakultas.index
        //selain compact bisa menggunakan with()
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //menampilkan formulis tambah data fakultas
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //memproses penyimpanan data fakultas
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas) //menampilkan detail data fakultas
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas) //menampilkan formulir edit data fakultas
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas) //memproses penyimpanan perubahan data yg ada pada formulir edit tadi
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas) //menghapus data fakultas
    {
        //
    }
}
