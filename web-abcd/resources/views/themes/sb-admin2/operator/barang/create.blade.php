@extends('layouts.admin')
@section('title', 'Tambah Data Barang')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Barang</h1>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('operator.barang.store') }}" method="post">
                    @csrf

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="id-kategori">Kategori:</label>
                                <select name="id_kategori" id="id-kategori" class="form-control" required="required">
                                    <option disabled selected>Pilih kategori...</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}"
                                            @if (old('id_kategori') == $item->id) selected @endif>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Barang:</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" id="nama"
                                    class="form-control @error('nama') is-invalid @enderror" required>

                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kode_barang" class="control-label">Kode Barang:</label>
                                <input type="text" name="kode_barang" value="{{ old('kode_barang') }}" id="kode_barang"
                                    class="form-control @error('kode_barang') is-invalid @enderror" required>

                                @error('kode_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stok" class="control-label">Stok Awal:</label>
                                <input type="number" name="stok" value="{{ old('stok') }}" id="stok"
                                    class="form-control @error('stok') is-invalid @enderror" min="0" required>

                                @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="satuan" class="control-label">Satuan:</label>
                                <input type="text" name="satuan" value="{{ old('satuan') }}" id="satuan"
                                    class="form-control @error('satuan') is-invalid @enderror">

                                @error('satuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="control-label">Deskripsi Barang:</label>
                                <textarea name="deskripsi" id="deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>

                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <input type="submit" value="Tambah Data" class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
