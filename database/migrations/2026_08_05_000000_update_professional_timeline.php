<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateProfessionalTimeline extends Migration
{
    public function up()
    {
        $now = now();

        $somos = DB::table('steps')->where('place', 'SOMOS')->first();

        if ($somos) {
            DB::table('steps')
                ->where('id', $somos->id)
                ->update([
                    'title' => json_encode([
                        'es' => 'Cofundador y desarrollador',
                        'de' => 'Mitgründer & Entwickler',
                    ]),
                    'description' => json_encode([
                        'es' => 'SOMOS es una red regional que conecta consumidores, comercios locales y organizaciones sin fines de lucro. A través de una app y un sistema de puntos, cada compra fortalece la economía local y genera un impacto social transparente.',
                        'de' => 'SOMOS ist ein regionales Netzwerk, das Verbraucher:innen, lokale Geschäfte und Non-Profits verbindet. Über eine App und ein Punktesystem stärkt jeder Einkauf die lokale Wirtschaft und schafft transparenten sozialen Mehrwert.',
                    ]),
                    'updated_at' => $now,
                ]);

            DB::table('boxes')
                ->where('step_id', $somos->id)
                ->where('type', 1)
                ->update([
                    'content' => json_encode([
                        'es' => '<p>SOMOS hace visible una red de comercios regionales y organizaciones sin fines de lucro mediante un mapa con filtros y sellos como regional, bio o comercio justo.</p><p>Las personas compran como siempre, sin pagar un extra, y reciben puntos que pueden canjear en cualquier comercio de la red. Un punto equivale a 0,01 €.</p><p>Los comercios aportan una tarifa de servicio del 3 % por transacción como gasto operativo. SOMOS la distribuye de manera transparente:</p><ul><li>50 % en puntos para las personas usuarias.</li><li>10 % para organizaciones sin fines de lucro locales.</li><li>40 % para el funcionamiento y desarrollo de la plataforma.</li></ul><p>De esta manera, el programa de fidelización de los comercios también financia proyectos regionales y fortalece un circuito económico local.</p>',
                        'de' => '<p>SOMOS macht ein Netzwerk regionaler Geschäfte und Non-Profits über eine Karte mit Filtern und Siegeln wie regional, bio oder fair sichtbar.</p><p>Mitglieder kaufen wie gewohnt und ohne Aufpreis ein. Sie erhalten Punkte, die sie in jedem SOMOS-Geschäft im Netzwerk einlösen können. Ein Punkt entspricht 0,01 €.</p><p>Die Geschäfte zahlen eine Servicegebühr von 3 % pro Transaktion als reguläre Betriebsausgabe. SOMOS verteilt sie transparent:</p><ul><li>50 % als Punkte für Mitglieder.</li><li>10 % an lokale Non-Profits.</li><li>40 % für Betrieb und Weiterentwicklung der Plattform.</li></ul><p>So finanziert das Loyalty-Programm der Geschäfte zugleich regionale Projekte und stärkt einen lokalen Wirtschaftskreislauf.</p>',
                    ]),
                    'updated_at' => $now,
                ]);
        }

        $timelineEntries = [
            [
                'key' => 'education-utn-2011',
                'init' => '2011-01-01',
                'end' => '2016-12-31',
                'title' => [
                    'es' => 'Ingeniería en Sistemas',
                    'de' => 'Systemingenieurwesen',
                ],
                'description' => [
                    'es' => 'Formación universitaria en sistemas e ingeniería de software.',
                    'de' => 'Universitäre Ausbildung in Systemen und Software Engineering.',
                ],
                'place' => [
                    'es' => 'Universidad Tecnológica Nacional, La Plata, Argentina',
                    'de' => 'Universidad Tecnológica Nacional, La Plata, Argentinien',
                ],
            ],
            [
                'key' => 'felp-joven-2016',
                'init' => '2016-01-01',
                'end' => '2017-12-31',
                'title' => [
                    'es' => 'Cofundador y miembro de comisión — FELP Joven',
                    'de' => 'Mitgründer und Kommissionsmitglied — FELP Joven',
                ],
                'description' => [
                    'es' => 'Integrante del grupo fundador y de la comisión organizadora de una iniciativa orientada a fortalecer el vínculo entre jóvenes, emprendimientos y la comunidad.',
                    'de' => 'Mitglied der Gründungsgruppe und Organisationskommission einer Initiative zur Stärkung des Austauschs zwischen jungen Menschen, Unternehmertum und Gemeinschaft.',
                ],
                'place' => [
                    'es' => 'FELP Joven, La Plata, Argentina',
                    'de' => 'FELP Joven, La Plata, Argentinien',
                ],
            ],
            [
                'key' => 'education-goettingen-2021',
                'init' => '2021-01-01',
                'end' => '2024-12-31',
                'title' => [
                    'es' => 'Informática aplicada — foco en neuroinformática',
                    'de' => 'Angewandte Informatik — Schwerpunkt Neuroinformatik',
                ],
                'description' => [
                    'es' => 'Formación en informática aplicada con foco en neuroinformática.',
                    'de' => 'Ausbildung in Angewandter Informatik mit Schwerpunkt Neuroinformatik.',
                ],
                'place' => [
                    'es' => 'Georg-August-Universität Göttingen, Alemania',
                    'de' => 'Georg-August-Universität Göttingen, Deutschland',
                ],
            ],
            [
                'key' => 'education-potsdam-2025',
                'init' => '2025-01-01',
                'end' => '1950-01-01',
                'title' => [
                    'es' => 'Informática / Computational Science',
                    'de' => 'Informatik / Computational Science',
                ],
                'description' => [
                    'es' => 'Formación actual en Informática y Computational Science.',
                    'de' => 'Aktuelles Studium in Informatik und Computational Science.',
                ],
                'place' => [
                    'es' => 'Universität Potsdam, Alemania',
                    'de' => 'Universität Potsdam, Deutschland',
                ],
            ],
        ];

        foreach ($timelineEntries as $entry) {
            if (DB::table('steps')->where('key', $entry['key'])->doesntExist()) {
                $stepId = DB::table('steps')->insertGetId([
                    'init' => $entry['init'],
                    'end' => $entry['end'],
                    'title' => json_encode($entry['title']),
                    'description' => json_encode($entry['description']),
                    'place' => json_encode($entry['place']),
                    'key' => $entry['key'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);

                DB::table('boxes')->insert([
                    'name' => json_encode([
                        'es' => 'Descripción',
                        'de' => 'Beschreibung',
                    ]),
                    'icon' => 'fas fa-align-center',
                    'type' => 1,
                    'content' => json_encode([
                        'es' => '<p>' . $entry['description']['es'] . '</p>',
                        'de' => '<p>' . $entry['description']['de'] . '</p>',
                    ]),
                    'step_id' => $stepId,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

        DB::table('steps')
            ->where('place', 'Maschinenhandel Meyer')
            ->update([
                'end' => '2020-12-31',
                'title' => json_encode([
                    'es' => 'Desarrollador de software y administrador IT',
                    'de' => 'Softwareentwickler & IT-Administrator',
                ]),
                'description' => json_encode([
                    'es' => 'Desarrollo de soluciones internas, mantenimiento de servidores y redes, y modernización de sistemas existentes.',
                    'de' => 'Entwicklung interner Lösungen, Betreuung von Server- und Netzwerkinfrastruktur sowie Modernisierung bestehender Systeme.',
                ]),
                'updated_at' => $now,
            ]);

        $umgTechnologies = [
            ['name' => 'PHP', 'icon' => 'fab fa-php', 'es' => 'Desarrollador de', 'de' => 'Entwickler von'],
            ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'es' => 'Siervo de', 'de' => 'Diener von'],
            ['name' => 'Python', 'icon' => 'fab fa-python', 'es' => 'Aficionado a', 'de' => 'Fan von'],
            ['name' => 'Javascript', 'icon' => 'fab fa-js', 'es' => 'Desarrollador de', 'de' => 'Entwickler von'],
            ['name' => 'Java', 'icon' => 'fab fa-java', 'es' => 'Domador de', 'de' => 'Bändiger'],
            ['name' => 'Spring Boot', 'icon' => 'fas fa-leaf', 'es' => 'Cultivador de', 'de' => 'Gärtner'],
            ['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'es' => 'Invocador de', 'de' => 'Beschwörer'],
            ['name' => 'REST APIs', 'icon' => 'fas fa-plug', 'es' => 'Conector de', 'de' => 'Verbinder'],
            ['name' => 'Dart', 'icon' => 'fas fa-bullseye', 'es' => 'Lanzador de', 'de' => 'Werfer'],
            ['name' => 'Flutter', 'icon' => 'fas fa-feather', 'es' => 'Aleteador de', 'de' => 'Flatterer'],
            ['name' => 'Docker', 'icon' => 'fab fa-docker', 'es' => 'Lacayo de', 'de' => 'Diener von'],
            ['name' => 'Debian', 'icon' => 'fab fa-linux', 'es' => 'Habitante de', 'de' => 'Bewohner'],
            ['name' => 'Podman', 'icon' => 'fas fa-box', 'es' => 'Pastor de', 'de' => 'Hirte'],
            ['name' => 'GitLab CI/CD', 'icon' => 'fab fa-gitlab', 'es' => 'Orquestador de', 'de' => 'Dirigent'],
            ['name' => 'Jenkins', 'icon' => 'fab fa-jenkins', 'es' => 'Compañero de', 'de' => 'Kollege von'],
            ['name' => 'Traefik', 'icon' => 'fas fa-route', 'es' => 'Navegante de', 'de' => 'Navigator'],
            ['name' => 'Apache', 'icon' => 'fas fa-server', 'es' => 'Invocador de', 'de' => 'Beschwörer'],
            ['name' => 'ELK Stack', 'icon' => 'fas fa-search', 'es' => 'Rastreador de', 'de' => 'Spurenleser'],
            ['name' => 'Bash', 'icon' => 'fas fa-terminal', 'es' => 'Habitante de', 'de' => 'Bewohner'],
            ['name' => 'Linux', 'icon' => 'fab fa-linux', 'es' => 'Amigo de', 'de' => 'Freund von'],
            ['name' => 'PostgreSQL', 'icon' => 'fas fa-database', 'es' => 'Colega de', 'de' => 'Kollege'],
            ['name' => 'MySQL', 'icon' => 'fas fa-database', 'es' => 'Colega de', 'de' => 'Kollege'],
            ['name' => 'MariaDB', 'icon' => 'fas fa-database', 'es' => 'Colega de', 'de' => 'Kollege'],
            ['name' => 'SQLite', 'icon' => 'fas fa-database', 'es' => 'Colega de', 'de' => 'Kollege'],
            ['name' => 'Svelte', 'icon' => 'fas fa-fire', 'es' => 'Entusiasta de', 'de' => 'Enthusiast'],
            ['name' => 'Typescript', 'icon' => 'fas fa-code', 'es' => 'Aprendiz de', 'de' => 'Lehrling von'],
            ['name' => 'Vue JS', 'icon' => 'fab fa-vuejs', 'es' => 'Enamorado de', 'de' => 'Fan von'],
            ['name' => 'React', 'icon' => 'fab fa-react', 'es' => 'Conversador con', 'de' => 'Gesprächspartner von'],
            ['name' => 'Angular', 'icon' => 'fab fa-angular', 'es' => 'Habitante de', 'de' => 'Bewohner'],
            ['name' => 'Livewire', 'icon' => 'fas fa-bolt', 'es' => 'Electrificador de', 'de' => 'Elektriker von'],
            ['name' => 'C#', 'icon' => 'fas fa-code', 'es' => 'Desarrollador de', 'de' => 'Entwickler von'],
            ['name' => '.NET', 'icon' => 'fab fa-microsoft', 'es' => 'Compañero de', 'de' => 'Kollege von'],
            ['name' => 'Delphi', 'icon' => 'fas fa-landmark', 'es' => 'Arqueólogo de', 'de' => 'Archäologe von'],
            ['name' => 'Google Cloud Platform', 'icon' => 'fab fa-google', 'es' => 'Turista de', 'de' => 'Tourist bei'],
            ['name' => 'AWS', 'icon' => 'fab fa-aws', 'es' => 'Turista de', 'de' => 'Tourist bei'],
            ['name' => 'Raspberry Pi', 'icon' => 'fab fa-raspberry-pi', 'es' => 'Amigo de', 'de' => 'Freund von'],
            ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'es' => 'Camarada de', 'de' => 'Kamerad von'],
            ['name' => 'Kubernetes', 'icon' => 'fas fa-dharmachakra', 'es' => 'Aprendiz de', 'de' => 'Lehrling von'],
        ];

        if (DB::table('steps')->where('key', 'umg-2020')->doesntExist()) {
            $stepId = DB::table('steps')->insertGetId([
                'init' => '2020-01-01',
                'end' => '1950-01-01',
                'title' => json_encode([
                    'es' => 'Site Reliability Engineer y Product Owner',
                    'de' => 'Site Reliability Engineer & Product Owner',
                ]),
                'description' => json_encode([
                    'es' => 'Responsable de infraestructura Linux y de sistemas productivos de investigación. Automatizo despliegues y procesos operativos, acompaño migraciones de Debian, implementé monitoreo centralizado con ELK Stack y coordino la hoja de ruta técnica entre IT, investigación y usuarios especializados.',
                    'de' => 'Verantwortung für Linux-Infrastruktur und produktive Forschungssysteme. Automatisierung von Deployments und Betriebsprozessen, Begleitung von Debian-Migrationen, Einführung eines zentralen Monitorings mit ELK Stack sowie Koordination der technischen Roadmap zwischen IT, Forschung und Fachanwendern.',
                ]),
                'place' => json_encode([
                    'es' => 'Universitätsmedizin Göttingen (UMG), Göttingen, Alemania',
                    'de' => 'Universitätsmedizin Göttingen (UMG), Göttingen, Deutschland',
                ]),
                'key' => 'umg-2020',
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            DB::table('boxes')->insert([
                'name' => json_encode([
                    'es' => 'Descripción',
                    'de' => 'Beschreibung',
                ]),
                'icon' => 'fas fa-align-center',
                'type' => 1,
                'content' => json_encode([
                    'es' => '<p>Responsable de una infraestructura creciente de servidores Linux y de sistemas productivos de investigación.</p><ul><li>Estandarización y automatización de despliegues, mantenimiento y procesos operativos con Bash, Cron y scripting.</li><li>Migración de varios sistemas a nuevas versiones de Debian, preservando la estabilidad en producción.</li><li>Implementación de monitoreo centralizado basado en ELK Stack.</li><li>Finalización y puesta en producción del portal de investigación Feasibility Explorer, utilizado a nivel europeo.</li></ul>',
                    'de' => '<p>Verantwortung für eine wachsende Linux-Server-Infrastruktur und produktive Forschungssysteme.</p><ul><li>Standardisierung und Automatisierung von Deployments, Wartung und Service-Prozessen mit Bash, Cron und Skripting.</li><li>Migration mehrerer Systeme auf neue Debian-Releases bei Sicherstellung der Produktionsstabilität.</li><li>Einführung eines zentralen Monitorings auf Basis des ELK-Stacks.</li><li>Übernahme, Fertigstellung und produktive Inbetriebnahme des europaweit genutzten Forschungsportals Feasibility Explorer.</li></ul>',
                ]),
                'step_id' => $stepId,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $technologyBoxId = DB::table('boxes')->insertGetId([
                'name' => json_encode([
                    'es' => 'Tecnologías',
                    'de' => 'Technologien',
                ]),
                'icon' => 'fas fa-microchip',
                'type' => 2,
                'content' => 'Tecnologías',
                'step_id' => $stepId,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            foreach ($umgTechnologies as $technology) {
                $product = DB::table('products')->where('name', $technology['name'])->first();

                if (!$product) {
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
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]);
                } else {
                    $productId = $product->id;
                }

                DB::table('box_product')->updateOrInsert([
                    'box_id' => $technologyBoxId,
                    'product_id' => $productId,
                ]);
            }
        }

        $languages = [
            'Español — nativo',
            'Alemán — C1',
            'Inglés — B2',
            'Italiano — A1',
            'Islandés — A1',
        ];

        foreach ($languages as $language) {
            if (DB::table('products')->where('name', $language)->doesntExist()) {
                DB::table('products')->insert([
                    'name' => $language,
                    'icon' => 'fas fa-language',
                    'tech' => true,
                    'me' => true,
                    'agregar' => null,
                    'antes' => true,
                    'inicio' => false,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }

    public function down()
    {
        $umgStep = DB::table('steps')->where('key', 'umg-2020')->first();

        if ($umgStep) {
            DB::table('boxes')->where('step_id', $umgStep->id)->delete();
            DB::table('steps')->where('id', $umgStep->id)->delete();
        }
    }
}
