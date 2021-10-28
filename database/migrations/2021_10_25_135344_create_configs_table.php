<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['Index', 'Contato', 'Epsodio', 'Agenda']);
            $table->string('campo', 250);
            $table->text('valor');
            $table->string('complemento', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('descricao', 250);
            $table->string('link_youtube', 250)->nullable();
            $table->datetime('dt_podcast');
            $table->string('imagem', 250)->nullable();
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
        Schema::dropIfExists('configs');
        Schema::dropIfExists('agendas');
    }
}
