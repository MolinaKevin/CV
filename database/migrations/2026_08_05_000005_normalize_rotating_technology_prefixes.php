<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class NormalizeRotatingTechnologyPrefixes extends Migration
{
    public function up()
    {
        $prefixes = [
            'PHP' => ['es' => 'Desarrollador de', 'de' => 'Entwickler', 'en' => 'Developer of'],
            'Javascript' => ['es' => 'Desarrollador de', 'de' => 'Entwickler', 'en' => 'Developer of'],
            'CSS' => ['es' => 'Maquetador de', 'de' => 'Gestalter', 'en' => 'Styler of'],
            'HTML' => ['es' => 'Maquetador de', 'de' => 'Gestalter', 'en' => 'Markup writer of'],
            'Bootstrap' => ['es' => 'Entendedor de', 'de' => 'Kenner', 'en' => 'Explorer of'],
            'Tailwind' => ['es' => 'Examinador de', 'de' => 'Prüfer', 'en' => 'Examiner of'],
            'Vue JS' => ['es' => 'Enamorado de', 'de' => 'Fan', 'en' => 'Fan of'],
            'Typescript' => ['es' => 'Aprendiz de', 'de' => 'Lehrling', 'en' => 'Learner of'],
            'Python' => ['es' => 'Aficionado a', 'de' => 'Fan', 'en' => 'Enthusiast of'],
            'TDD' => ['es' => 'Discípulo del', 'de' => 'Schüler von', 'en' => 'Disciple of'],
            'PHP Unit' => ['es' => 'Discípulo de', 'de' => 'Schüler von', 'en' => 'Disciple of'],
            'Docker' => ['es' => 'Lacayo de', 'de' => 'Diener von', 'en' => 'Minion of'],
            'Laravel' => ['es' => 'Siervo de', 'de' => 'Diener von', 'en' => 'Servant of'],
            'Git' => ['es' => 'Camarada de', 'de' => 'Kamerad von', 'en' => 'Comrade of'],
            'MySQL' => ['es' => 'Colega de', 'de' => 'Kollege von', 'en' => 'Colleague of'],
            'Linux' => ['es' => 'Fanático de', 'de' => 'Fan von', 'en' => 'Fan of'],
            'Servers' => ['es' => 'Administrador de', 'de' => 'Administrator von', 'en' => 'Administrator of'],
        ];

        foreach ($prefixes as $name => $translations) {
            DB::table('products')
                ->where('name', $name)
                ->where('inicio', true)
                ->update(['agregar' => json_encode($translations)]);
        }
    }

    public function down()
    {
        // La corrección reemplaza valores inconsistentes de producción.
    }
}
