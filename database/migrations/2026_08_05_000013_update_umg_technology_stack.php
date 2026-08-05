<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateUmgTechnologyStack extends Migration
{
    public function up()
    {
        $umg = DB::table('steps')->where('key', 'umg-2020')->first();

        if (! $umg) {
            return;
        }

        $technologyBox = DB::table('boxes')
            ->where('step_id', $umg->id)
            ->where('type', 2)
            ->first();

        if (! $technologyBox) {
            return;
        }

        $traefikId = DB::table('products')->where('name', 'Traefik')->value('id');

        if ($traefikId) {
            DB::table('box_product')
                ->where('box_id', $technologyBox->id)
                ->where('product_id', $traefikId)
                ->delete();
        }

        $technologies = [
            ['name' => 'Ansible', 'icon' => 'fas fa-cogs', 'es' => 'Orquestador de', 'de' => 'Orchestrator von'],
            ['name' => 'Terminator', 'icon' => 'fas fa-terminal', 'es' => 'Habitante de', 'de' => 'Bewohner von'],
            ['name' => 'Nginx', 'icon' => 'fas fa-server', 'es' => 'Guardián de', 'de' => 'Wächter von'],
            ['name' => 'Svelte', 'icon' => 'fas fa-fire', 'es' => 'Entusiasta de', 'de' => 'Enthusiast von'],
            ['name' => 'Python', 'icon' => 'fab fa-python', 'es' => 'Aficionado a', 'de' => 'Fan von'],
            ['name' => 'Gradle', 'icon' => 'fas fa-hammer', 'es' => 'Constructor con', 'de' => 'Erbauer mit'],
            ['name' => 'Elasticsearch', 'icon' => 'fas fa-search', 'es' => 'Rastreador en', 'de' => 'Spurenleser in'],
            ['name' => 'Kibana', 'icon' => 'fas fa-chart-bar', 'es' => 'Observador con', 'de' => 'Beobachter mit'],
            ['name' => 'Logstash', 'icon' => 'fas fa-stream', 'es' => 'Canalizador de', 'de' => 'Sammler von'],
            ['name' => 'Beats', 'icon' => 'fas fa-heartbeat', 'es' => 'Escuchando', 'de' => 'Lauscht'],
        ];

        foreach ($technologies as $technology) {
            $product = DB::table('products')->where('name', $technology['name'])->first();

            if (! $product) {
                $productId = DB::table('products')->insertGetId([
                    'name' => $technology['name'],
                    'icon' => $technology['icon'],
                    'tech' => true,
                    'me' => true,
                    'agregar' => json_encode([
                        'es' => $technology['es'],
                        'de' => $technology['de'],
                        'en' => $technology['es'],
                    ]),
                    'antes' => true,
                    'inicio' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                $productId = $product->id;
            }

            DB::table('box_product')->updateOrInsert([
                'box_id' => $technologyBox->id,
                'product_id' => $productId,
            ]);
        }
    }

    public function down()
    {
        // El stack de UMG refleja las tecnologías confirmadas por el usuario.
    }
}
