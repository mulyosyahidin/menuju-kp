<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('themes.sb-admin2.operator.barang.index', compact('barang'));
    }

    public function create()
    {
        echo "form tambah barang";
    }

    public function store(Request $request)
    {
        echo "disni validasi data dan menyimpan data";
    }
}
