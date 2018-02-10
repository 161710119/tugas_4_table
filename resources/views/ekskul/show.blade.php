@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Ekskul
			  	<div class="panel-title pull-right"><a href="{{ route('ekskuls.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Ekstrakulikuler</label>
			  			<input type="text" name="eks" class="form-control" value="{{ $ekskuls->eks }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jam Ekskul</label>	
			  			<input type="text" name="jam" class="form-control" value="{{ $ekskuls->jam }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">No Absen</label>	
			  			<input type="text" name="absen" class="form-control" value="{{ $ekskuls->absen }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $ekskuls->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection