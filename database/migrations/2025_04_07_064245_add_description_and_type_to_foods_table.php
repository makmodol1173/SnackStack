<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionAndTypeToFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('foods', function (Blueprint $table) {
        if (!Schema::hasColumn('foods', 'description')) {
            $table->string('description')->nullable();
        }

        if (!Schema::hasColumn('foods', 'type')) {
            $table->string('type')->nullable();
        }
    });
}

public function down()
{
    Schema::table('foods', function (Blueprint $table) {
        $table->dropColumn(['description', 'type']);
    });
}

}
