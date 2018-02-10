@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Buku
			  	<div class="panel-title pull-right"><a href="{{ route('bukus.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('bukus.update',$bukus->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Buku</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $bukus->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tema') ? ' has-error' : '' }}">
			  			<label class="control-label">Tema Buku</label>	
			  			<input type="text" name="tema" class="form-control" value="{{ $bukus->tema }}"  
			  			required>
			  			@if ($errors->has('tema'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tema') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('penerbit') ? ' has-error' : '' }}">
			  			<label class="control-label">Penerbit</label>	
			  			<input type="text" name="penerbit" class="form-control" value="{{ $bukus->penerbit }}"  required>
			  			@if ($errors->has('penerbit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('penerbit') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('trilis') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Rilis Buku</label>	
			  			<input type="text" name="trilis" class="form-control" value="{{ $bukus->trilis }}"  required>
			  			@if ($errors->has('trilis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('trilis') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection