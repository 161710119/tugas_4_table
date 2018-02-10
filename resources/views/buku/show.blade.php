@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Buku
			  	<div class="panel-title pull-right"><a href="{{ route('bukus.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul Buku</label>
			  			<input type="text" name="judul" class="form-control" value="{{ $bukus->judul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tema Buku</label>	
			  			<input type="text" name="tema" class="form-control" value="{{ $bukus->tema }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Penerbit</label>	
			  			<input type="text" name="penerbit" class="form-control" value="{{ $bukus->penerbit }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Rilis Buku</label>	
			  			<input type="text" name="trilis" class="form-control" value="{{ $bukus->trilis }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection