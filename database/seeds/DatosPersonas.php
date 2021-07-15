<?php

use Illuminate\Database\Seeder;

class DatosPersonas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            [
            'nombre' => 'david ',
            'telefono' => 65328741
            ],
            [
                'nombre' => 'davidomg',
                'telefono' => 89965745
                ]
            ]);
    }
}
