<?php

use Illuminate\Database\Seeder;

class ProfessioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'Manager',
        ]);

        DB::table('professions')->insert([
            'title' => 'Seller'
        ]);

        DB::table('professions')->insert([
            'title' => 'Grocer'
        ]);
    }
}
