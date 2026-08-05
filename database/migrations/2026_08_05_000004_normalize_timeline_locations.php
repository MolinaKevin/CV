<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class NormalizeTimelineLocations extends Migration
{
    public function up()
    {
        $locations = [
            1 => ['es' => 'Municipalidad de Brandsen, Brandsen, Argentina', 'de' => 'Gemeinde Brandsen, Brandsen, Argentinien'],
            2 => ['es' => 'Sista S.A., Punta Lara, Argentina', 'de' => 'Sista S.A., Punta Lara, Argentinien'],
            3 => ['es' => 'Brandsen, Argentina', 'de' => 'Brandsen, Argentinien'],
            4 => ['es' => 'Argentina y Alemania', 'de' => 'Argentinien und Deutschland'],
            5 => ['es' => 'La Plata, Argentina', 'de' => 'La Plata, Argentinien'],
            6 => ['es' => 'La Plata, Argentina', 'de' => 'La Plata, Argentinien'],
            7 => ['es' => 'La Plata, Argentina', 'de' => 'La Plata, Argentinien'],
            8 => ['es' => 'Göttingen, Alemania', 'de' => 'Göttingen, Deutschland'],
            9 => ['es' => 'La Plata, Argentina', 'de' => 'La Plata, Argentinien'],
            10 => ['es' => 'Centro Cultural Olga Vázquez, La Plata, Argentina', 'de' => 'Kulturzentrum Olga Vázquez, La Plata, Argentinien'],
            11 => ['es' => 'Barrio Rubencito, Punta Lara, Argentina', 'de' => 'Barrio Rubencito, Punta Lara, Argentinien'],
            12 => ['es' => 'La Plata, Argentina', 'de' => 'La Plata, Argentinien'],
        ];

        foreach ($locations as $stepId => $location) {
            DB::table('steps')
                ->where('id', $stepId)
                ->update(['place' => json_encode($location)]);
        }
    }

    public function down()
    {
        // Las ubicaciones anteriores eran inconsistentes o estaban ausentes.
    }
}
