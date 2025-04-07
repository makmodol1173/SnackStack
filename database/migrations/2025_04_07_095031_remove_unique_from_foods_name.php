<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromFoodsName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('foods', function (Blueprint $table) {
        $table->dropUnique('foods_name_unique'); // Drop the unique constraint
    });
}

public function down()
{
    Schema::table('foods', function (Blueprint $table) {
        $table->unique('name'); // Add the unique constraint back
    });
}

}
