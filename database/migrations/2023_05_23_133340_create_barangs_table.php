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
        // Schema::create('barangs', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama_barang');
        //     $table->unsignedBigInteger('pengiriman_id');
        //     $table->foreign('pengiriman_id')->references('id')->on('Pengiriman');
        //     $table->string('merek');
        //     $table->string('jenis');
        //     $table->string('kode_barang');
        //     $table->integer('jmlh_barang');
        //     $table->integer('berat_barang');
        //     $table->integer('biaya_kg');
        //     $table->integer('total_kg');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
