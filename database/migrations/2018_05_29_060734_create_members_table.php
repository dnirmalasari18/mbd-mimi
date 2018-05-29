<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->date('tanggal_lahir');
            $table->string('alamat',100);
            $table->string('kecamatan',20);
            $table->string('kota',20);
            $table->string('provinsi',20);
            $table->string('kode_pos',6);
            $table->string('email',100);
            $table->binary('foto')->nullable();
            //foto sama password menyusul ae :>
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
        Schema::dropIfExists('members');
    }
}
