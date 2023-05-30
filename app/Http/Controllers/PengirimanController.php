<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengiriman = new Pengiriman();
        $pengiriman->nama_konsumen = $request['nama_konsumen'];
        $pengiriman->no_telp_konsumen = $request['no_telp_konsumen'];
        $pengiriman->kota = $request['kota'];
        $pengiriman->alamat_pengiriman = $request['alamat_pengiriman'];
        $pengiriman->tgl_pengiriman = $request['tgl_pengiriman'];
        $pengiriman->status = "Belum diproses";

        $pengiriman->nama_barang = $request['nama_barang'];
        $pengiriman->merek = $request['merek'];
        $pengiriman->jenis = $request['jenis'];
        $pengiriman->kode_barang = $request['kode_barang'];
        $pengiriman->jmlh_barang = $request['jmlh_barang'];
        $pengiriman->berat_barang = $request['berat_barang'];
        $pengiriman->biaya_kg = $request['biaya_kg'];
        $pengiriman->biaya_total = $request['biaya_total'];

        $pengiriman->nama_supir = $request['nama_supir'];
        $pengiriman->no_telp_supir = $request['no_telp_supir'];
        $pengiriman->jenis_kelamin = $request['jenis_kelamin'];
        $pengiriman->alamat_supir = $request['alamat_supir'];

        $pengiriman->save();
        return redirect('/dashboard')->with('status', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengiriman $pengiriman, $id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('forms.formPengirimaShow', compact('pengiriman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengiriman $pengiriman, $id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('forms.formPengirimaShow', compact('pengiriman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Pengiriman $pengiriman)
    {
        $pengiriman = Pengiriman::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengiriman $pengiriman)
    {
        //
    }
}
