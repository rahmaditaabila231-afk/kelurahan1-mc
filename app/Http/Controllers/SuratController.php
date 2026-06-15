<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;    
use App\Models\Surat;


class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaSurat = Surat::with('penduduk')->get();      
        return view('surat_index', compact('semuaSurat')); 
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data penduduk untuk pilihan dropdown di form
        $penduduk = Penduduk::all();
        return view('surat.create', compact('penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
