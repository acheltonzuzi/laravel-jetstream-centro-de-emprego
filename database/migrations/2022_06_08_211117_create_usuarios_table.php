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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->String("nome");
            $table->enum("sexo",["Masculino","Femenino"]);
            $table->String("nacionalidade");
            $table->String("nascimento");
            $table->String("bi");
            $table->String("provincia");
            $table->String("cidade");
            $table->String("bairro");
            $table->String("telefone");
            $table->String("email")->unique();
            $table->String("cv");
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
        Schema::dropIfExists('usuarios');
    }
};
