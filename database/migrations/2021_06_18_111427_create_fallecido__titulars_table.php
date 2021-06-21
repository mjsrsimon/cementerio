<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallecidoTitularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallecido__titulars', function (Blueprint $table) {
			$table->id();

			$table->unsignedBigInteger('fallecido_id');
			$table->unsignedBigInteger('titular_id');

			$table->foreign('fallecido_id')->references('id')->on('fallecidos')->onDelete('cascade');
			$table->foreign('titular_id')->references('id')->on('titulars')->onDelete('cascade');

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
        Schema::dropIfExists('fallecido__titulars');
    }
}
