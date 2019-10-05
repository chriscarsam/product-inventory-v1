<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        

        DB::table('category')->insert([
            'name' => 'Papelería',
            'description' => 'Lista de material y suministos de oficina',
        ]);
        
        DB::table('category')->insert([
            'name' => 'Abarrotes',
            'description' => 'productos de primera necesidad',
        ]);

        DB::table('category')->insert([
            'name' => 'Bazar',
            'description' => 'productos belleza',
        ]);

        DB::table('category')->insert([
            'name' => 'Ferretería',
            'description' => 'herramientas, accesorios para el arreglo de su hogar',
        ]);
    }
}
