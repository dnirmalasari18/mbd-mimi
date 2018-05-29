<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merk_id')->unsigned();
            $table->foreign('merk_id')
                    ->references('id')->on('merks');
            $table->integer('warna_id')->unsigned();
            $table->foreign('warna_id')
                    ->references('id')->on('warnas');
            $table->integer('ukuran_id')->unsigned();
            $table->foreign('ukuran_id')
                    ->references('id')->on('ukurans');
            $table->integer('kategori_barang_id')->unsigned();
            $table->foreign('kategori_barang_id')
                    ->references('id')->on('kategori_barangs');
            $table->string('nama',150);
            $table->integer('harga');
            $table->integer('stok');
            $table->binary('foto')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
