<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $admin = 'Jessy';
        $usia = 90;
        $alamat = 'Disana';

        return view('students.index', compact('admin', 'usia', 'alamat'));
    }

    public function lihat($id)
    {
        echo $id;
    }
}
