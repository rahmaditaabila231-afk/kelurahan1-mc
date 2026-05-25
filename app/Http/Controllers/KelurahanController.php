<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function penduduk()
    {
        $id = 1;
        $nama = 'John Doe';
        $alamat = 'Jl. Merdeka No. 123';
        $action = 'Edit';
        return view('penduduk', compact('id', 'nama', 'alamat', 'action'));
    }
}
