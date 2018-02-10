@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Ekskul
					<div class="panel-title pull-right"><a href="{{ route('ekskuls.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Ekstrakulikuler</th>
					<th>Jam Ekskul</th>
					<th>No Absen</th>
					<th>Nama Siswa</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($ekskuls as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->eks }} </td>
		<td><p> {{ $data->jam }} </p></td>
		<td><p> {{ $data->absen }} </p></td>
		<td><p> {{ $data->nama }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('ekskuls.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('ekskuls.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('ekskuls.destroy',$data->id) }}">
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