
@extends('layouts.admin')
@section('title', 'Kategori Barang')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">{{ $kategori->nama }}</h1>

        <div class="row">
            <div class="col-5">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $kategori->nama }}</h6>
                    </div>
					<div class="table-responsive">
						<table class="table table-condensed table-hover">
							<tbody>
								<tr>
									<td>Nama Kategori</td>
									<td class="font-weight-bold">{{ $kategori->nama }}</td>
								</tr>
							</tbody>
						</table>
					</div>
                </div>

            </div>
			<div class="col-7">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Barang Dalam Kategori Ini</h6>
                    </div>
					@if (count($kategori->barang) > 0)
						<div class="table-responsive">
							<table class="table table-condensed table-hover">
								<thead class="thead-dark">
									<th scope="col">Kode</th>
									<th scope="col">Nama Barang</th>
								</thead>
								<tbody>
									@foreach ($kategori->barang as $item)
										<tr>
											<td>{{ $item->kode_barang }}</td>
											<td>{{ $item->nama }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					@else
					<div class="card-body">
						<div class="alert alert-info">
							Tidak ada barang dalam kategori ini.
						</div>
					</div>
					@endif
                </div>
			</div>
        </div>
    </div>
@endsection
