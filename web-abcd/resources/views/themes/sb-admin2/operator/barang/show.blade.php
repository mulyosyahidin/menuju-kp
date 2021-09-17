@extends('layouts.admin')
@section('title', 'Data Inventaris Barang')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Inventaris Barang</h1>

        <div class="row">
            <div class="col-12">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $barang->nama }}</h6>
                    </div>
					<div class="table-responsive">
						<table class="table table-condensed table-hover">
							<tbody>
								<tr>
									<td>Nama Barang</td>
									<td class="font-weight-bold">{{ $barang->nama }}</td>
								</tr>
								<tr>
									<td>Kode Barang</td>
									<td class="font-weight-bold">{{ $barang->kode_barang }}</td>
								</tr>
								<tr>
									<td>Stok Awal</td>
									<td class="font-weight-bold">{{ $barang->stok }}</td>
								</tr>
								<tr>
									<td>Satuan</td>
									<td class="font-weight-bold">{{ $barang->satuan }}</td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td class="font-weight-bold">{{ $barang->deskripsi }}</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>

            </div>
        </div>
    </div>
@endsection
