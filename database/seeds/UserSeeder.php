<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?',['Desarrollador back-end']);

        $professionId = DB::table('professions')
                    ->whereTitle('Desarrollador back-end')
                    ->value('id');

        
        DB::table('users')->insert([
            'name' => 'Christian Sambachi',
            'email' => 'chris@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
        ]);
    }
}
