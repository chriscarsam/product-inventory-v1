<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit')->insert([
            'name' => 'unidad'
        ]);

        DB::table('unit')->insert([
            'name' => 'libra'
        ]);

        DB::table('unit')->insert([
            'name' => 'kilo'
        ]);

        DB::table('unit')->insert([
            'name' => 'litro'
        ]);
    }
}
