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
            'name' => 'Supper Admin',
            'role' => 'super_admin',
            'email' => 'raihan1@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Raihan',
            'role' => 'admin',
            'email' => 'raihan2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
