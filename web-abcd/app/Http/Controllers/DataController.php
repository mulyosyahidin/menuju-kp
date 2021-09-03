<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $siswa = 'test variabel';
        $students = ['Andi', 'Dedy'];

        return view('abc', compact('siswa', 'students'));
    }

    public function tambah()
    {
        echo 'Create data';
    }

    public function show($nama, $usia)
    {
        echo "Nama: $nama, usia: $usia";
    }
}
