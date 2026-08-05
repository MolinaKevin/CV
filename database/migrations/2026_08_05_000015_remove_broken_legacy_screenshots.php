<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RemoveBrokenLegacyScreenshots extends Migration
{
    public function up()
    {
        DB::table('screenshots')
            ->where('path', 'like', 'screens/%')
            ->delete();
    }

    public function down()
    {
        // Los archivos originales ya no están disponibles para restaurarlos.
    }
}
