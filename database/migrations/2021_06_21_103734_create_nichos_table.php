<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNichosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nichos', function (Blueprint $table) {
            $table->id();
          
			$table->string('numero', 10)->required();
			$table->boolean('alquiler')->nullable();       
			$table->boolean('cenizas')->nullable();  
			$table->boolean('libre')->nullable();
			     
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
        Schema::dropIfExists('nichos');
    }
}
