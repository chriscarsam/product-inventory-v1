<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            'shelving' => '1A',
            'level' => 'uno',
            'floor' => 'uno'
        ]);

        DB::table('location')->insert([
            'shelving' => '2A',
            'level' => 'dos',
            'floor' => 'uno'
        ]);

        DB::table('location')->insert([
            'shelving' => '3A',
            'level' => 'tres',
            'floor' => 'uno'
        ]);

        DB::table('location')->insert([
            'shelving' => '1B'
        ]);

        DB::table('location')->insert([
            'shelving' => '2B'
        ]);
    }
}
