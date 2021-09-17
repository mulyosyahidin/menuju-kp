@extends('layouts.admin')
@section('title', 'Edit Data Barang')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Barang</h1>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('operator.barang.update', $barang->id) }}" method="post">
                    @csrf
					@method('PUT')

                    <div class="card shadow mb-4">

						<div class="card-body">
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Barang:</label>
                                <input type="text" name="nama" value="{{ old('nama', $barang->nama) }}" id="nama"
                                    class="form-control @error('nama') is-invalid @enderror" required>

                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kode_barang" class="control-label">Kode Barang:</label>
                                <input type="text" name="kode_barang" value="{{ old('kode_barang', $barang->kode_barang) }}" id="kode_barang"
                                    class="form-control @error('kode_barang') is-invalid @enderror" required>

                                @error('kode_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stok" class="control-label">Stok Awal:</label>
                                <input type="number" name="stok" value="{{ old('stok', $barang->stok) }}" id="stok"
                                    class="form-control @error('stok') is-invalid @enderror" min="0" required>

                                @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="satuan" class="control-label">Satuan:</label>
                                <input type="text" name="satuan" value="{{ old('satuan', $barang->satuan) }}" id="satuan"
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
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $barang->deskripsi) }}</textarea>

                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
						<div class="card-footer text-right">
							<input type="submit" value="Simpan Data" class="btn btn-primary">
						</div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
