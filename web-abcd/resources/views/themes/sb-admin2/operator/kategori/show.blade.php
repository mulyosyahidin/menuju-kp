
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
					<div class="card-body">
						<div class="alert alert-info">
							Semua barang dalam kategori <b>{{ $kategori->nama }}</b> akan ditampilkan disini.
						</div>
					</div>
                </div>
			</div>
        </div>
    </div>
@endsection
