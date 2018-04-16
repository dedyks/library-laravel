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
            'libraries', function (Blueprint $table) {
              $table->primary(['ISBN']);
            $table->char('ISBN');
            $table->string('title', 99);
            $table->string('subtitle', 99);
            $table->string('author', 99);
            $table->datetime('publicationDate');
            $table->string('publisher', 99);
            $table->integer('pages');
            $table->string('description', 4000);
            $table->string('website', 99);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
