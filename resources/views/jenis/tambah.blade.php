@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Jenis</h3>
</div>


<form method="POST" action="/jenis/simpan">
	@csrf
   <div class="card-body">
      <div class="form-group">
            <label for="">Nama Jenis</label>
            <input type="text" name="jenis_nama" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Status Jenis</label>
            <select name="jenis_status" class="form-control">
                  <option>Active</option>
                  <option>Kosong</option>
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>

@endsection