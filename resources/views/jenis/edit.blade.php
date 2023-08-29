@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Ubah Data Jenis</h3>
</div>

<form method="POST" action="/jenis/update/{{$jenis->id}}">
	@csrf
      @method('put')
   <div class="card-body">
      <div class="form-group">
            <label for="">Id Jenis</label>
            <input type="text" value="{{$jenis->id_jenis}}" name="id_jenis" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Nama Jenis</label>
            <input type="text" value="{{$jenis->jenis_nama}}" name="jenis_nama" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Status Jenis</label>
            <input type="text" value="{{$jenis->jenis_status}}" name="jenis_status" class="form-control" id="" placeholder=" ">
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>


@endsection