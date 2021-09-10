@extends('layouts.admin')
@section('title', 'Data Barang')

@section('content')
    <div class="container-fluid">

        <div class="d-flex mb-3">
            <h1 class="h3 mb-2 text-gray-800">Daftar Barang</h1>

            <span class="ml-auto">
                <a href="{{ route('operator.barang.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> Tambah Data</a>
            </span>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
                    </div>
                    @if (count($barang) > 0)
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->kode_barang }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="alert alert-info">
                                Tidak ada untuk ditampilkan.
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
