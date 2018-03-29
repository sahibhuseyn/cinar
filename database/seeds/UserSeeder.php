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
        DB::table('users')->insert([
            'name' => 'Chinar admin',
            'email' => 'info@cinaryayimlari.com',
            'password' => bcrypt('chinar123')
        ]);
    }
}
