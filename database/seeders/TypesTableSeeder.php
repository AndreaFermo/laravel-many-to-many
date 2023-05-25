<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Sistema di prenotazioni', 'Sistema di gestione alberghiera', 'Piattaforma di streaming'];

        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::slug($type, '-');
            $newType->save();
        }
    }
}
