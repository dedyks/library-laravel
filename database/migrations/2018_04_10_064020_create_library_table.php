<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'library', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 99);
            $table->string('author', 99);
            $table->string('weight', 99);
            $table->string('publisher', 99);
            $table->string('language', 99);
            $table->string('pages', 99);
            $table->datetime('publicationDate');
            $table->datetime('created_on');
            $table->datetime('updated_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library');
    }
}
