<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'super@admin.com',
            'password' => bcrypt('adminadmin'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'role_id' => '2'
        ]);
    }
}
