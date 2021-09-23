<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('created_at', 'DESC')->with('kategori')->paginate(10);

        return view('themes.sb-admin2.operator.barang.index', compact('barang'));
    }

    public function create()
    {
        $kategori = Kategori::orderBy('nama')->get();

        return view('themes.sb-admin2.operator.barang.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|numeric',
            'nama' => 'required|min:4',
            'kode_barang' => 'required|min:4|unique:barang,kode_barang',
            'stok' => 'required|min:0|max:999|numeric',
            'satuan' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        // disini kode jika validasi berhasil
        $barang = new Barang();
        $barang->id_kategori = $request->id_kategori;
        $barang->nama = $request->nama;
        $barang->kode_barang = $request->kode_barang;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan = $request->satuan;
        $barang->save();

        return redirect()
            ->to(route('operator.barang'))
            ->withSuccess('Berhasil menambah data barang');
    }

    public function show(Barang $barang)
    {
        return view('themes.sb-admin2.operator.barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('themes.sb-admin2.operator.barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'kode_barang' => 'required|min:4',
            'stok' => 'required|min:0|max:999|numeric',
            'satuan' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $barang->nama = $request->nama;
        $barang->kode_barang = $request->kode_barang;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan = $request->satuan;
        $barang->save();

        return redirect()
            ->to(route('operator.barang'))
            ->withSuccess('Berhasil mengubah data barang');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()
            ->to(route('operator.barang'))
            ->withSuccess('Berhasil menghapus data barang');
    }
}
