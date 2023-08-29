@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Transaksi</h3>
</div>


<form method="POST" action="/transaksi/simpan">
	@csrf
   <div class="card-body">
    <div class="col-md-6 col-12" style="float: right">
      <div class="form-group">
            <label for="">Admin</label>
            <select name="id_admin" class="form-control">
                  <option selected disabled>Silahkan Dipilih</option>
                  @foreach($admin as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
            </select>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="form-group">
            <label for="">Transaksi Tanggal</label>
            <input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder=" ">
      </div>
    </div>

    <div class="col-md-6 col-12" style="float: right">
      <div class="form-group">
            <label for="">Transaksi No Nota</label>
            <input type="text" name="transaksi_nonota" class="form-control" id="" placeholder=" ">
      </div>
    </div>

    <div class="col-md-6 col-12 ">
      <div class="form-group">
            <label for="">Transaksi Status</label>
            <input type="text" name="transaksi_status" class="form-control" id="" placeholder=" ">
      </div>
    </div>

    <div class="col-md-6 col-12 " style="float: right">
      <div class="form-group">
            <label for="">Id Barang</label>
            <select name="id_Barang" class="form-control">
                  <option selected disabled>Silahkan Dipilih</option>
                  @foreach($barang as $row)
                  <option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
                  @endforeach
            </select>
      </div>
    </div>

    <div class="col-md-6 col-12 ">
      <div class="form-group">
            <label for="">Transaksi Jenis</label>
            <input type="text" name="transaksi_jenis" class="form-control" id="" placeholder=" ">
      </div>
    </div>

    <div class="col-md-6 col-12 " style="float: right">
      <div class="form-group">
            <label for="">Transaksi Harga</label>
            <input type="text" name="transaksi_harga" class="form-control" id="" placeholder=" ">
      </div>
    </div>

    <div class="col-md-6 col-12 ">
      <div class="form-group">
            <label for="">Transaksi Jumlah</label>
            <input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder=" ">
      </div>
    </div>


      <div class="form-group">
            <label for="">Transaksi Detail Status</label>
            <input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder=" ">
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>

@endsection
