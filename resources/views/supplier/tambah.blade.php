@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Supplier</h3>
</div>


<form method="POST" action="/supplier/simpan">
	@csrf
   <div class="card-body">
      <div class="form-group">
            <label for="">Nama Supplier</label>
            <input type="text" name="supplier_nama" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Alamat Supplier</label>
            <input type="text" name="supplier_alamat" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">No Handphone Supplier</label>
            <input type="text" name="supplier_phone" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Status Supplier</label>
            <select name="supplier_status" class="form-control">
                  <option>Ready</option>
                  <option>Kosong</option>
            </select>
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>


@endsection