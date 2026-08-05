<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class IdentifyFacturarProject extends Migration
{
    public function up()
    {
        $now = now();

        DB::table('steps')
            ->where('id', 3)
            ->update([
                'title' => json_encode([
                    'es' => 'Fundador y desarrollador — facturar.molinakev.in',
                    'de' => 'Gründer und Entwickler — facturar.molinakev.in',
                ]),
                'description' => json_encode([
                    'es' => 'Sistema de gestión, pedidos, facturación y stock para una distribuidora de Brandsen, conectado mediante una API REST a terminales Android e iOS.',
                    'de' => 'System für Verwaltung, Bestellungen, Rechnungsstellung und Lagerbestand eines Großhändlers in Brandsen, das über eine REST-API mit Android- und iOS-Terminals verbunden ist.',
                ]),
                'place' => json_encode([
                    'es' => 'facturar.molinakev.in, Brandsen, Argentina',
                    'de' => 'facturar.molinakev.in, Brandsen, Argentinien',
                ]),
                'updated_at' => $now,
            ]);

        DB::table('boxes')
            ->where('step_id', 3)
            ->where('type', 1)
            ->update([
                'name' => json_encode(['es' => 'Descripción', 'de' => 'Beschreibung']),
                'content' => json_encode([
                    'es' => '<p>Sistema utilizado por una distribuidora de Brandsen para gestionar pedidos, facturación y stock.</p><p>Las terminales Android e iOS se conectan al sistema mediante una API REST para cargar pedidos. Cada día se genera automáticamente la lista de carga del camión según las localidades a entregar.</p>',
                    'de' => '<p>System eines Großhändlers in Brandsen zur Verwaltung von Bestellungen, Rechnungsstellung und Lagerbestand.</p><p>Android- und iOS-Terminals verbinden sich über eine REST-API mit dem System, um Bestellungen zu erfassen. Täglich wird automatisch die Ladeliste für den Lkw entsprechend der Lieferorte erstellt.</p>',
                ]),
                'updated_at' => $now,
            ]);
    }

    public function down()
    {
        // El proyecto queda identificado de forma explícita en el historial.
    }
}
