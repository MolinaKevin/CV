<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddDownloadedProjectImages extends Migration
{
    public function up()
    {
        $projects = [
            3 => [
                ['path' => 'images/facturacion_km.png', 'title' => ['es' => 'Panel de facturar.molinakev.in', 'de' => 'Verwaltungsoberfläche von facturar.molinakev.in'], 'subtitle' => ['es' => 'Gestión y facturación', 'de' => 'Verwaltung und Rechnungsstellung'], 'content' => ['es' => 'Panel de administración del sistema de pedidos, stock y facturación.', 'de' => 'Verwaltungsoberfläche für Bestellungen, Lagerbestand und Rechnungsstellung.']],
            ],
            5 => [
                ['path' => 'images/descuentodo.png', 'title' => ['es' => 'DescuenTODO', 'de' => 'DescuenTODO'], 'subtitle' => ['es' => 'Identidad visual', 'de' => 'Visuelle Identität'], 'content' => ['es' => 'Logo de la plataforma de descuentos regionales.', 'de' => 'Logo der regionalen Rabattplattform.']],
                ['path' => 'images/descuentodo_mapa.png', 'title' => ['es' => 'Mapa de DescuenTODO', 'de' => 'Karte von DescuenTODO'], 'subtitle' => ['es' => 'Ofertas geolocalizadas', 'de' => 'Ortsbezogene Angebote'], 'content' => ['es' => 'Mapa para descubrir comercios, descuentos y promociones cercanas.', 'de' => 'Karte zum Entdecken von Geschäften, Rabatten und Angeboten in der Nähe.']],
                ['path' => 'images/descuentodo_splash.png', 'title' => ['es' => 'Pantalla de inicio', 'de' => 'Startbildschirm'], 'subtitle' => ['es' => 'Aplicación móvil', 'de' => 'Mobile App'], 'content' => ['es' => 'Pantalla de bienvenida de la aplicación DescuenTODO.', 'de' => 'Willkommensbildschirm der DescuenTODO-App.']],
            ],
            6 => [
                ['path' => 'images/publitodo.png', 'title' => ['es' => 'PubliTODO', 'de' => 'PubliTODO'], 'subtitle' => ['es' => 'Identidad visual', 'de' => 'Visuelle Identität'], 'content' => ['es' => 'Logo de la red de pantallas publicitarias.', 'de' => 'Logo des Werbedisplay-Netzwerks.']],
                ['path' => 'images/publitodo_ui.png', 'title' => ['es' => 'Software PubliTODO', 'de' => 'PubliTODO-Software'], 'subtitle' => ['es' => 'Gestión de contenidos', 'de' => 'Inhaltsverwaltung'], 'content' => ['es' => 'Interfaz de administración para las pantallas y sus contenidos.', 'de' => 'Verwaltungsoberfläche für die Displays und ihre Inhalte.']],
            ],
            7 => [
                ['path' => 'images/gkd.png', 'title' => ['es' => 'GKD', 'de' => 'GKD'], 'subtitle' => ['es' => 'Gestión de usuarios', 'de' => 'Benutzerverwaltung'], 'content' => ['es' => 'Listado y administración de usuarios del sistema.', 'de' => 'Liste und Verwaltung der Systembenutzer:innen.']],
                ['path' => 'images/gkd_intro.png', 'title' => ['es' => 'Panel GKD', 'de' => 'GKD-Dashboard'], 'subtitle' => ['es' => 'Administración', 'de' => 'Administration'], 'content' => ['es' => 'Panel principal de administración de GKD.', 'de' => 'Hauptansicht der GKD-Verwaltung.']],
                ['path' => 'images/gkd_maquina.jpg', 'title' => ['es' => 'Control de acceso biométrico', 'de' => 'Biometrische Zugangskontrolle'], 'subtitle' => ['es' => 'Dispositivo', 'de' => 'Gerät'], 'content' => ['es' => 'Equipo de control de acceso utilizado en la prueba del sistema.', 'de' => 'Zugangskontrollgerät aus dem Testbetrieb des Systems.']],
            ],
        ];

        foreach ($projects as $stepId => $images) {
            $box = DB::table('boxes')->where('step_id', $stepId)->where('type', 4)->first();

            if (! $box) {
                continue;
            }

            foreach ($images as $image) {
                if (DB::table('screenshots')->where('box_id', $box->id)->where('path', $image['path'])->doesntExist()) {
                    DB::table('screenshots')->insert([
                        'path' => $image['path'],
                        'title' => json_encode($image['title']),
                        'subtitle' => json_encode($image['subtitle']),
                        'content' => json_encode($image['content']),
                        'box_id' => $box->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    public function down()
    {
        DB::table('screenshots')->whereIn('path', [
            'images/facturacion_km.png',
            'images/descuentodo.png',
            'images/descuentodo_mapa.png',
            'images/descuentodo_splash.png',
            'images/publitodo.png',
            'images/publitodo_ui.png',
            'images/gkd.png',
            'images/gkd_intro.png',
            'images/gkd_maquina.jpg',
        ])->delete();
    }
}
