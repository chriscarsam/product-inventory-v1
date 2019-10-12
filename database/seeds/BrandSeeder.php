<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            'name' => 'Bic',
            'description' => 'Empresa de papeleria'
        ]);

        DB::table('brand')->insert([
            'name' => 'Escribe',
            'description' => 'Empresa ecuatoriana, fabricante de cuadernos'
        ]);

        DB::table('brand')->insert([
            'name' => 'Norma',
            'description' => 'Empresa colombiana, fabricante de cuadernos'
        ]);

        DB::table('brand')->insert([
            'name' => 'Rico Arroz'
        ]);

        DB::table('brand')->insert([
            'name' => 'San Carlos'
        ]);
    }
}
