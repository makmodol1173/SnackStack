<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFoodPriceToDouble extends Migration
{
    public function up()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->float('price')->change();
        });
    }

    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->change(); // or whatever the original type was
        });
    }
}
