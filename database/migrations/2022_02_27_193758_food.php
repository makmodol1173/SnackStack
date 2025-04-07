<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Food extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::dropIfExists('foods');  // Drop the table first
    Schema::create('foods', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->float('price');
        $table->text('description')->nullable();
        $table->string('type')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('foods');
}

}
