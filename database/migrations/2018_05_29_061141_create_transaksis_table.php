<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')
                    ->references('id')->on('members');
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')
                    ->references('id')->on('barangs');
            $table->integer('jumlah_barang');
            $table->integer('total_harga');
            $table->string('status_transaksi',1);
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
        Schema::dropIfExists('transaksis');
    }
}
