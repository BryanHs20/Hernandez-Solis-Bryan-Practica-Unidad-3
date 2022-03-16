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
        Schema::create('cp', function (Blueprint $table) {
            $table->string('Id');
            $table->text('codigo');
            $table->text('asentamiento');
            $table->text('tipo_asenta');
            $table->text('municipio');
            $table->text('estado');
            $table->text('ciudad');
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
        Schema::dropIfExists('cp');
    }
};
