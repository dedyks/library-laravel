<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngkatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angkatan', function (Blueprint $table) {
            $table->increments('no');
            $table->string('Nama',50);
            $table->string('Panggilan',50);
            $table->string('TTL',50);
            $table->string('Asal',100);
            $table->string('Alamat Yogya',100);
            $table->string('No HP',20);
            $table->string('Email UGM',50);
            $table->string('Facebook',50);
            $table->string('Twitter',50);
            $table->string('Buku Favorit',50);
            $table->string('Tokoh Inspirasi',50);
            $table->string('Quotes',200);
            $table->string('TI/TE',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('angkatan');
    }
}
