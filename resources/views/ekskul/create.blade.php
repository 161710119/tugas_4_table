@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Ekskul 
			  	<div class="panel-title pull-right"><a href="{{ route('ekskuls.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('ekskuls.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('eks') ? ' has-error' : '' }}">
			  			<label class="control-label">Ekstrakulikuler</label>	
			  			<input type="text" name="eks" class="form-control"  required>
			  			@if ($errors->has('eks'))
                            <span class="help-block">
                                <strong>{{ $errors->first('eks') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jam') ? ' has-error' : '' }}">
			  			<label class="control-label">Jam Ekskul</label>	
			  			<input type="text" name="jam" class="form-control"  required>
			  			@if ($errors->has('jam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jam') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('absen') ? ' has-error' : '' }}">
			  			<label class="control-label">No Absen</label>	
			  			<input type="text" name="absen" class="form-control"  required>
			  			@if ($errors->has('absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
					<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection