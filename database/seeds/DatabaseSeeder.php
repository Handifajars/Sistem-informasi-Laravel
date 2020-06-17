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
        // $this->call(UsersTableSeeder::class);

        DB::table('admin')->insert([
       	'username'  => 'admin',
       	'password'  => 'admin',
         ]);
        DB::table('user')->insert([
        'username'  => 'user',
        'password'  => 'user',
        'divisi'    => 'TSI',
         ]);
    }
}
