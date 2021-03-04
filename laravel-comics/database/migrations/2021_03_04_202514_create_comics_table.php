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
            $table->text('descrizione');
            $table->string('slug')->unique();
            $table->string('copertina')->nullable();
            $table->boolean('disponibile')->default(true);
            $table->char('artista');
            $table->char('scrittore');
            $table->string('serie');
            $table->float('prezzo');
            $table->date('rilasciato_il');
            $table->integer('volume');
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
