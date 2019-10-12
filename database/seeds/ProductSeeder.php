<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'barcode' => '12345',
            'name' => 'cuaderno universitario espiral cuadros',
            'stock' => (10),
            'priceOut' => (1.50),
            'creationDate' => NOW(),
            'dateExpiry' => '2019-12-01',
            'updateDate' => NOW(),
            'warehouse_id' => DB::table('warehouse')->where('name','Almacen2')->value('id'),
            'location_id' => DB::table('location')->whereShelving('1A')->value('id'),
            'brand_id' => DB::table('brand')->whereName('Norma')->value('id'),
            'unit_id' => DB::table('unit')->whereName('unidad')->value('id'),            
            'category_id' => DB::table('category')->whereName('Papelería')->value('id'),
        ]);
    }
}
