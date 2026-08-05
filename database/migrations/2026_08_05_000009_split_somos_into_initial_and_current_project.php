<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SplitSomosIntoInitialAndCurrentProject extends Migration
{
    public function up()
    {
        $now = now();

        DB::table('steps')
            ->where('id', 4)
            ->update([
                'init' => '2015-01-01',
                'end' => '2016-12-31',
                'title' => json_encode([
                    'es' => 'Cofundador y desarrollador — SOMOS (primera etapa)',
                    'de' => 'Mitgründer und Entwickler — SOMOS (erste Phase)',
                ]),
                'description' => json_encode([
                    'es' => 'Primer intento de crear una red de economía circular y solidaria. El proyecto no llegó a implementarse: requería cambios demasiado grandes en los procesos de trabajo y las condiciones operativas de ese momento no estaban maduras.',
                    'de' => 'Erster Versuch, ein solidarisches Netzwerk für Kreislaufwirtschaft aufzubauen. Das Projekt wurde nicht umgesetzt: Es hätte zu große Veränderungen in den Arbeitsprozessen erfordert, und die operativen Voraussetzungen waren damals noch nicht reif.',
                ]),
                'place' => json_encode([
                    'es' => 'SOMOS, Argentina y Alemania',
                    'de' => 'SOMOS, Argentinien und Deutschland',
                ]),
                'updated_at' => $now,
            ]);

        DB::table('boxes')
            ->where('step_id', 4)
            ->where('type', 1)
            ->update([
                'name' => json_encode(['es' => 'Descripción', 'de' => 'Beschreibung']),
                'content' => json_encode([
                    'es' => '<p>SOMOS fue un primer emprendimiento personal para explorar una economía circular y solidaria.</p><p>La idea no llegó a implementarse porque la tecnología y los procesos necesarios exigían un cambio demasiado grande para el contexto de ese momento.</p><p>La experiencia dejó las bases conceptuales que retomé en una versión actualizada desde 2025.</p>',
                    'de' => '<p>SOMOS war ein erstes persönliches Projekt zur Erprobung einer solidarischen Kreislaufwirtschaft.</p><p>Die Idee wurde damals nicht umgesetzt, weil die erforderliche Technologie und Prozesse im damaligen Kontext zu große Veränderungen bedeutet hätten.</p><p>Die Erfahrung bildete die konzeptionelle Grundlage für die seit 2025 weiterentwickelte Version.</p>',
                ]),
                'updated_at' => $now,
            ]);

        if (DB::table('steps')->where('key', 'somos-2025')->doesntExist()) {
            $stepId = DB::table('steps')->insertGetId([
                'init' => '2025-01-01',
                'end' => '1950-01-01',
                'title' => json_encode([
                    'es' => 'Cofundador y desarrollador — SOMOS',
                    'de' => 'Mitgründer und Entwickler — SOMOS',
                ]),
                'description' => json_encode([
                    'es' => 'Versión actual de SOMOS: una red regional que conecta consumidores, comercios locales y organizaciones sin fines de lucro mediante una app y un sistema de puntos.',
                    'de' => 'Aktuelle Version von SOMOS: ein regionales Netzwerk, das Verbraucher:innen, lokale Geschäfte und Non-Profits über eine App und ein Punktesystem verbindet.',
                ]),
                'place' => json_encode([
                    'es' => 'SOMOS, Alemania',
                    'de' => 'SOMOS, Deutschland',
                ]),
                'key' => 'somos-2025',
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            DB::table('boxes')->insert([
                'name' => json_encode(['es' => 'Descripción', 'de' => 'Beschreibung']),
                'icon' => 'fas fa-align-center',
                'type' => 1,
                'content' => json_encode([
                    'es' => '<p>SOMOS conecta consumidores, comercios locales y organizaciones sin fines de lucro en una red regional.</p><p>Las personas compran como siempre y reciben puntos que pueden canjear dentro de la red; cada punto equivale a 0,01 €.</p><p>Los comercios aportan una tarifa de servicio del 3 % por transacción. SOMOS la distribuye de forma transparente: 50 % en puntos para las personas usuarias, 10 % para organizaciones sin fines de lucro locales y 40 % para el funcionamiento y desarrollo de la plataforma.</p><p>Así, el programa de fidelización también fortalece proyectos regionales y el circuito económico local.</p>',
                    'de' => '<p>SOMOS verbindet Verbraucher:innen, lokale Geschäfte und Non-Profits in einem regionalen Netzwerk.</p><p>Mitglieder kaufen wie gewohnt und erhalten Punkte, die sie innerhalb des Netzwerks einlösen können; ein Punkt entspricht 0,01 €.</p><p>Die Geschäfte zahlen eine Servicegebühr von 3 % pro Transaktion. SOMOS verteilt sie transparent: 50 % als Punkte für Mitglieder, 10 % an lokale Non-Profits und 40 % für Betrieb und Weiterentwicklung der Plattform.</p><p>So stärkt das Loyalty-Programm zugleich regionale Projekte und den lokalen Wirtschaftskreislauf.</p>',
                ]),
                'step_id' => $stepId,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }

    public function down()
    {
        // Las dos etapas de SOMOS se mantienen como parte del historial.
    }
}
