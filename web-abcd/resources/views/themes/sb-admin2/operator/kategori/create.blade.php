@extends('layouts.admin')
@section('title', 'Tambah Data Kategori')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Kategori</h1>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('operator.kategori.store') }}" method="post">
                    @csrf

                    <div class="card shadow mb-4">

						<div class="card-body">
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Kategori:</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" id="nama"
                                    class="form-control @error('nama') is-invalid @enderror" required>

                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
						<div class="card-footer text-right">
							<input type="submit" value="Tambah" class="btn btn-primary">
						</div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
