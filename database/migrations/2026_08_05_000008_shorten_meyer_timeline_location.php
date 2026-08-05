<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ShortenMeyerTimelineLocation extends Migration
{
    public function up()
    {
        DB::table('steps')
            ->where('id', 8)
            ->update([
                'place' => json_encode([
                    'es' => 'Maschinenhandel Meyer GmbH & Co. KG, Göttingen, Alemania',
                    'de' => 'Maschinenhandel Meyer GmbH & Co. KG, Göttingen, Deutschland',
                ]),
                'updated_at' => now(),
            ]);
    }

    public function down()
    {
        // La ubicación breve es la versión preferida para el CV.
    }
}
