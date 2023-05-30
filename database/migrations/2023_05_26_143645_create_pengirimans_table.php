<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen');
            $table->string('no_telp_konsumen');
            $table->string('kota');
            $table->string('alamat_pengiriman');
            $table->string('tgl_pengiriman');
            $table->string('status');

            $table->string('nama_barang');
            $table->string('merek');
            $table->string('jenis');
            $table->string('kode_barang');
            $table->integer('jmlh_barang');
            $table->integer('berat_barang');
            $table->integer('biaya_kg');
            $table->integer('biaya_total');

            $table->string('nama_supir');
            $table->string('no_telp_supir');
            $table->string('jenis_kelamin');
            $table->string('alamat_supir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirimans');
    }
};
