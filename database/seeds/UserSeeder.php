<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$professions = DB::select('SELECT id FROM professions WHERE title = "Seller"');

        //dd($profession);

        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'chris@gmail.com',
            'password' => bcrypt('123'),
            'profession_id' => DB::table('professions')->whereTitle('Seller')->value('id'),
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('123'),
            'profession_id' => DB::table('professions')->whereTitle('Manager')->value('id'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Daniel',
            'email' => 'daniel@yahoo.com',
            'password' => bcrypt('123'),
            'profession_id' => DB::table('professions')->whereTitle('Grocer')->value('id'),
        ]);
    }
}
