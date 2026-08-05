<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateMeyerTimelineEntry extends Migration
{
    public function up()
    {
        $step = DB::table('steps')->where('id', 8)->first();

        if (! $step) {
            return;
        }

        $now = now();
        $description = [
            'es' => '<p>Desarrollador de software y administrador IT responsable de aplicaciones internas, servidores y redes de la empresa.</p><ul><li>Modernización de sistemas legacy: actualización de aplicaciones mayoritariamente en PHP 5 a PHP 7 con Laravel y despliegues con Docker.</li><li>Migración integral del webshop: más de 14.000 productos, 21.000 relaciones, cupones y reglas de negocio hacia una plataforma Laravel basada en Bagisto.</li><li>Renovación de terminales conectadas por TCP/IP y simplificación de la infraestructura, de cinco servidores y un NAS a tres servidores.</li><li>Mejora de rendimiento y mantenimiento de herramientas antiguas, preservando los entornos necesarios para su operación.</li></ul>',
            'de' => '<p>Softwareentwickler und IT-Administrator mit Verantwortung für interne Anwendungen, Server und Netzwerke des Unternehmens.</p><ul><li>Modernisierung von Legacy-Systemen: Aktualisierung überwiegend in PHP 5 entwickelter Anwendungen auf PHP 7 mit Laravel sowie Containerisierung mit Docker.</li><li>Vollständige Migration des Webshops: mehr als 14.000 Produkte, 21.000 Relationen, Gutscheine und Geschäftsregeln auf eine Laravel-Plattform mit Bagisto.</li><li>Erneuerung von über TCP/IP angebundenen Terminals und Vereinfachung der Infrastruktur von fünf Servern und einem NAS auf drei Server.</li><li>Performance-Verbesserung und Wartung älterer Werkzeuge unter Erhalt der für ihren Betrieb benötigten Umgebungen.</li></ul>',
        ];

        DB::table('steps')
            ->where('id', $step->id)
            ->update([
                'title' => json_encode([
                    'es' => 'Desarrollador de software y administrador IT',
                    'de' => 'Softwareentwickler & IT-Administrator',
                ]),
                'description' => json_encode([
                    'es' => 'Desarrollo y modernización de sistemas internos, servidores, redes y el webshop de la empresa.',
                    'de' => 'Entwicklung und Modernisierung interner Systeme, Server, Netzwerke und des Webshops des Unternehmens.',
                ]),
                'place' => json_encode([
                    'es' => 'Maschinenhandel Meyer GmbH & Co. KG, Robert-Bosch-Breite 25, 37079 Göttingen, Alemania',
                    'de' => 'Maschinenhandel Meyer GmbH & Co. KG, Robert-Bosch-Breite 25, 37079 Göttingen, Deutschland',
                ]),
                'updated_at' => $now,
            ]);

        DB::table('boxes')
            ->where('step_id', $step->id)
            ->where('type', 1)
            ->update([
                'name' => json_encode(['es' => 'Descripción', 'de' => 'Beschreibung']),
                'content' => json_encode($description),
                'updated_at' => $now,
            ]);
    }

    public function down()
    {
        // Se conserva la información actualizada del historial profesional.
    }
}
