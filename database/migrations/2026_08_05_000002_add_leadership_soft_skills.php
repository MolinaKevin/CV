<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddLeadershipSoftSkills extends Migration
{
    public function up()
    {
        $now = now();
        $softSkills = [
            ['name' => 'Elocuencia', 'icon' => 'fas fa-microphone-alt'],
            ['name' => 'Liderazgo', 'icon' => 'fas fa-users'],
            ['name' => 'Iniciativa', 'icon' => 'fas fa-rocket'],
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
            'Elocuencia',
            'Liderazgo',
            'Iniciativa',
        ])->delete();
    }
}
