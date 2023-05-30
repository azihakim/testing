@extends('layouts.master')
{{-- @section('title', 'Form Pengiriman') --}}
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Pengiriman</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('pengiriman.store') }}" method="POST">
                @csrf
                <h4>Konsumen</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <input type="text" class="form-control" name="nama_konsumen" placeholder="Masukkan Nama Konsumen">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp_konsumen" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" name="kota"
                                placeholder="Masukkan Kota">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat_pengiriman"
                                placeholder="Masukkan Alamat Pengiriman">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tanggal Pengiriman</label>
                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <input type="disabled" class="form-control datetimepicker-input" data-target="#reservationdatetime"  name="tgl_pengiriman">
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Data diri supir</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nama Supir</label>
                            <input type="text" class="form-control" name="nama_supir" placeholder="Masukkan Nama Supir">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp_supir" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat_supir"
                                placeholder="Masukkan Alamat">
                        </div>
                    </div>
                </div>

                <h4>Barang</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <input type="text" class="form-control" name="jenis" placeholder="Masukkan Jenis Barang">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="merek" placeholder="Masukkan Merek Barang">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" placeholder="Masukkan Kode Barang">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input type="number" class="form-control" name="jmlh_barang"
                                placeholder="Masukkan Jumlah Barang">
                        </div>
                    </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Berat Barang per Kilogram</label>
                                <input type="number" class="form-control" name="berat_barang" id="jumlah-barang" oninput="calculateTotal()">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="number" class="form-control" name="biaya_kg" id="biaya" oninput="calculateTotal()">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Total Biaya</label>
                                <input type="text" class="form-control" name="biaya_total" id="total">
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary float-right">Simpan</button>
            </form>
        </div>
    </div>
    <script>
    function calculateTotal() {
      var jumlahBarang = document.getElementById("jumlah-barang").value;
      var biaya = document.getElementById("biaya").value;

      var total = jumlahBarang * biaya;
      var formattedTotal = total.toLocaleString();
      document.getElementById("total").value = formattedTotal;
    }
  </script>
@endsection
