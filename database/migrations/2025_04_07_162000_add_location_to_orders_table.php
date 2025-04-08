<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Check if the 'address' column exists before adding it
            if (!Schema::hasColumn('orders', 'address')) {
                $table->string('address')->nullable();
            }

            // Check if the 'latitude' column exists before adding it
            if (!Schema::hasColumn('orders', 'latitude')) {
                $table->decimal('latitude', 10, 8)->nullable();
            }

            // Check if the 'longitude' column exists before adding it
            if (!Schema::hasColumn('orders', 'longitude')) {
                $table->decimal('longitude', 11, 8)->nullable();
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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['address', 'latitude', 'longitude']);
        });
    }
}
