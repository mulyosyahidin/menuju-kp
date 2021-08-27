<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        echo 'Hello world!';
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
