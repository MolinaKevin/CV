<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddUmgLocationBox extends Migration
{
    public function up()
    {
        $step = DB::table('steps')->where('key', 'umg-2020')->first();

        if (! $step || DB::table('boxes')->where('step_id', $step->id)->where('type', 3)->exists()) {
            return;
        }

        DB::table('boxes')->insert([
            'name' => json_encode([
                'es' => 'Ubicación',
                'de' => 'Standort',
            ]),
            'icon' => 'fas fa-map-marker-alt',
            'type' => 3,
            'content' => json_encode([
                'es' => 'Universitätsmedizin Göttingen (UMG), Göttingen, Alemania',
                'de' => 'Universitätsmedizin Göttingen (UMG), Göttingen, Deutschland',
            ]),
            'step_id' => $step->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        $step = DB::table('steps')->where('key', 'umg-2020')->first();

        if ($step) {
            DB::table('boxes')
                ->where('step_id', $step->id)
                ->where('type', 3)
                ->delete();
        }
    }
}
