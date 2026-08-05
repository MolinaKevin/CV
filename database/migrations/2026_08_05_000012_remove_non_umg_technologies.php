<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RemoveNonUmgTechnologies extends Migration
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

        $productIds = DB::table('products')
            ->whereIn('name', [
                'Delphi',
                '.NET',
                'Raspberry Pi',
                'C#',
                'Laravel',
                'Livewire',
                'Kubernetes',
                'Dart',
                'Podman',
                'Flutter',
            ])
            ->pluck('id');

        DB::table('box_product')
            ->where('box_id', $technologyBox->id)
            ->whereIn('product_id', $productIds)
            ->delete();
    }

    public function down()
    {
        // El stack de UMG se mantiene restringido a las tecnologías usadas allí.
    }
}
