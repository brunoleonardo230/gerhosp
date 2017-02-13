<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',120);
            $table->date('datanasc')->nullable();
            $table->string('id_sexo',1);
            $table->integer('id_estadocivil');
            $table->string('naturalidade',60)->nullable();
            $table->string('ocupacao',60)->nullable();
            $table->string('nomepai',120)->nullable();
            $table->string('nomemae',120);
            $table->string('cpf',14);
            $table->string('rg',25);
            $table->string('cartaosus',25)->nullable();
            $table->string('cep',9)->nullable();
            $table->string('logradouro',200)->nullable();
            $table->string('complemento',200)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('localidade',50)->nullable();
            $table->string('uf',2)->nullable();
            $table->string('ibge',8)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
