<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->string('slug')->unique();
            $table->string('copertina')->nullable();
            $table->boolean('disponibile')->default(true);
            $table->char('artista')->nullable();
            $table->char('scrittore')->nullable();
            $table->string('serie')->nullable();
            $table->float('prezzo');
            $table->date('rilasciato_il')->nullable();
            $table->integer('volume')->nullable();
            $table->string('formato')->nullable();
            $table->integer('numero_pagine')->nullable();
            $table->integer('targhet')->nullable();
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
        Schema::dropIfExists('comics');
    }
}
