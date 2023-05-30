@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('formPengiriman') }}">Tambah Pengiriman</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama konsumen</th>
                        <th>Nama supir</th>
                        <th>Berat barang</th>
                        <th>Total biaya</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengiriman as $item)
                    <tr>
                        <td>{{ $item->nama_konsumen }}</td>
                        <td>{{ $item->nama_supir }}</td>
                        <td>{{ $item->berat_barang }}</td>
                        <td>{{ $item->biaya_total }}</td>
                        <td>
                            <div class="row">
                                <div class= "col-3">
                                <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('pengiriman/' . $item->id) }}">Lihat</a>
                            </div>
                            <div class= "col-3">
                                <a class="btn btn-block btn-outline-warning" href="{{ url('pengiriman/' . $item->id . '/edit') }}">Edit</a>
                            </div>
                            <div class= "col-3">
                                <form action="{{ url('pengiriman/' . $item->id) }} " method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>  
                            </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama konsumen</th>
                        <th>Nama supir</th>
                        <th>Berat barang</th>
                        <th>Total biaya</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
            <!-- /.card-body -->
        </div>
    </div>
    </div>
    </div>
@endsection
