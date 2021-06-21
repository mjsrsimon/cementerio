<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallecidos', function (Blueprint $table) {
			$table->id();
			$table->string('nombre')->required();
			$table->string('primer_apellido')->nullable();
			$table->string('segundo_apellido')->nullable();
			$table->string('situacion')->nullable();
			$table->string('decreto')->nullable();
			$table->string('OS')->nullable();
			$table->date('FechaSepelio')->nullable();
			$table->text('observaciones')->nullable();
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
        Schema::dropIfExists('fallecidos');
    }
}
