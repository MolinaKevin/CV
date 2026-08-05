<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddSoftSkillsToProfessionalSearch extends Migration
{
    public function up()
    {
        $now = now();
        $softSkills = [
            ['name' => 'Autonomía', 'icon' => 'fas fa-user-check'],
            ['name' => 'Pensamiento crítico', 'icon' => 'fas fa-brain'],
            ['name' => 'Resolución de problemas', 'icon' => 'fas fa-puzzle-piece'],
            ['name' => 'Comunicación clara', 'icon' => 'fas fa-comments'],
            ['name' => 'Visión global', 'icon' => 'fas fa-project-diagram'],
            ['name' => 'Trabajo interdisciplinario', 'icon' => 'fas fa-people-arrows'],
            ['name' => 'Responsabilidad de producto', 'icon' => 'fas fa-tasks'],
            ['name' => 'Colaboración técnica', 'icon' => 'fas fa-handshake'],
        ];

        foreach ($softSkills as $softSkill) {
            if (DB::table('products')->where('name', $softSkill['name'])->doesntExist()) {
                DB::table('products')->insert([
                    'name' => $softSkill['name'],
                    'icon' => $softSkill['icon'],
                    'tech' => 2,
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
        DB::table('products')->whereIn('name', [
            'Autonomía',
            'Pensamiento crítico',
            'Resolución de problemas',
            'Comunicación clara',
            'Visión global',
            'Trabajo interdisciplinario',
            'Responsabilidad de producto',
            'Colaboración técnica',
        ])->delete();
    }
}
