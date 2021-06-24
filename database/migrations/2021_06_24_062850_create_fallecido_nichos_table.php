<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallecidoNichosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallecido_nichos', function (Blueprint $table) {
            
			$table->increments('id');
			$table->unsignedBigInteger('fallecido_id')->unsigned()->nullable();
			$table->unsignedBigInteger('nicho_id')->unsigned()->nullable();
		

			$table->foreign('fallecido_id')->references('id')->on('fallecidos')->onDelete('cascade');
			$table->foreign('nicho_id')->references('id')->on('nichos')->onDelete('cascade');
            
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
        Schema::dropIfExists('fallecido_nichos');
    }
}
