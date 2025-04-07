<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFoodNameUnique extends Migration
{
    public function up()
    {
        // Check if the unique index already exists
        $sm = Schema::getConnection()->getDoctrineSchemaManager();
        $indexes = $sm->listTableIndexes('foods');

        if (!array_key_exists('foods_name_unique', $indexes)) {
            Schema::table('foods', function (Blueprint $table) {
                $table->unique('name');
            });
        }
    }

    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->dropUnique('foods_name_unique');
        });
    }
}
