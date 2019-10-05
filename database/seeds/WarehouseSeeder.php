<?php

use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("America/Guayaquil");
        
        DB::table('warehouse')->insert([
           'name' => 'Almacen 1',
           'address' => 'Guamani',
           'document' => '1234567891001',
           'phone' => '02245781524',
           'cellPhone' => '09842567814',
           'email' => 'almacen@gmail.com',
           'registrationDate' => NOW(),           
        ]);        

        DB::table('warehouse')->insert([
            'name' => 'Almacen 2',
            'address' => 'La Marin',
            'document' => '1958567891001',
            'phone' => '02285781524',
            'cellPhone' => '09848967814',
            'email' => 'almacen_two@gmail.com',
            'registrationDate' => NOW(),           
         ]);
    }
}
