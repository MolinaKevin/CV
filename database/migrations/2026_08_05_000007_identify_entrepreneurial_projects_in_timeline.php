<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class IdentifyEntrepreneurialProjectsInTimeline extends Migration
{
    public function up()
    {
        $projects = [
            5 => [
                'name' => 'DescuenTODO',
                'description' => [
                    'es' => 'Plataforma de descuentos y promociones geolocalizadas para acercar herramientas digitales al comercio regional.',
                    'de' => 'Plattform für ortsbezogene Rabatte und Angebote, die den regionalen Handel digital unterstützt.',
                ],
            ],
            6 => [
                'name' => 'PubliTODO',
                'description' => [
                    'es' => 'Red de pantallas publicitarias gestionadas con Raspberry Pi, microservicios en Python y un backend Laravel.',
                    'de' => 'Netzwerk von Werbedisplays mit Raspberry Pi, Python-Microservices und einem Laravel-Backend.',
                ],
            ],
            7 => [
                'name' => 'GKD',
                'description' => [
                    'es' => 'Sistema de identificación biométrica para la gestión de accesos en un natatorio y gimnasio de La Plata.',
                    'de' => 'Biometrisches Identifikationssystem zur Zugangskontrolle in einem Schwimmbad und Fitnessstudio in La Plata.',
                ],
            ],
        ];

        foreach ($projects as $stepId => $project) {
            DB::table('steps')
                ->where('id', $stepId)
                ->update([
                    'title' => json_encode([
                        'es' => 'Cofundador y desarrollador — ' . $project['name'],
                        'de' => 'Mitgründer und Entwickler — ' . $project['name'],
                    ]),
                    'description' => json_encode($project['description']),
                    'place' => json_encode([
                        'es' => $project['name'] . ', La Plata, Argentina',
                        'de' => $project['name'] . ', La Plata, Argentinien',
                    ]),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down()
    {
        // Se conserva la identificación explícita de los proyectos.
    }
}
