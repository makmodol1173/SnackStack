<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePictureColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('foods', function (Blueprint $table) {
        // Check if column 'picture' exists before adding it
        if (!Schema::hasColumn('foods', 'picture')) {
            $table->string('picture')->nullable();
        }
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
