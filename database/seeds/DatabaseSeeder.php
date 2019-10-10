<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("America/Guayaquil");
        
        $this->truncateTables([
            'professions', 
            'users',
            'category',
            'warehouse',                 
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(WarehouseSeeder::class);        
        
    }

    protected function truncateTables(array $tables)
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

            foreach($tables as $table){
                DB::table($table)->truncate();
            }
            
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        }
}
