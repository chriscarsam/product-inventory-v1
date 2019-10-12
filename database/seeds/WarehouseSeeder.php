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
                
        DB::table('warehouse')->insert([
           'name' => 'Almacen1',
           'address' => 'Guamani',
           'document' => '1234567891001',
           'phone' => '02245781524',
           'cellPhone' => '09842567814',
           'email' => 'almacen@gmail.com',
           'registrationDate' => NOW(),
           'user_id' => DB::table('users')->whereEmail('chris@gmail.com')->value('id'),           
        ]);        

        DB::table('warehouse')->insert([
            'name' => 'Almacen2',
            'address' => 'La Marin',
            'document' => '1958567891001',
            'phone' => '02285781524',
            'cellPhone' => '09848967814',
            'email' => 'almacen_two@gmail.com',
            'registrationDate' => NOW(),   
            'user_id' => DB::table('users')->whereEmail('carlos@gmail.com')->value('id'),        
         ]);

         DB::table('warehouse')->insert([
             'name' => 'Almacen3',
             'address' => 'La Villa Flora',
             'document' => '1284597841001',
             'phone' => '023548924',
             'cellPhone' => '0985162485',
             'email' => 'almacen_three@gmeil.com',
             'registrationDate' => NOW(),
             'user_id' => DB::table('users')->whereEmail('daniel@yahoo.com')->value('id'),
         ]);
    }
}
