<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CorrectMeyerAndUmgDates extends Migration
{
    public function up()
    {
        DB::table('steps')
            ->where('place', 'Maschinenhandel Meyer')
            ->update(['end' => '2021-12-31']);

        DB::table('steps')
            ->where('key', 'umg-2020')
            ->update(['init' => '2021-01-01']);
    }

    public function down()
    {
        DB::table('steps')
            ->where('place', 'Maschinenhandel Meyer')
            ->update(['end' => '2020-12-31']);

        DB::table('steps')
            ->where('key', 'umg-2020')
            ->update(['init' => '2020-01-01']);
    }
}
