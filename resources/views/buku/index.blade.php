@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Buku
					<div class="panel-title pull-right"><a href="{{ route('bukus.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul Buku</th>
					<th>Tema Buku</th>
					<th>Penerbit</th>
					<th>Tanggal Rilis Buku</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($bukus as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->judul }} </td>
		<td><p> {{ $data->tema }} </p></td>
		<td><p> {{ $data->penerbit }} </p></td>
		<td><p> {{ $data->trilis }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('bukus.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('bukus.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('bukus.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection