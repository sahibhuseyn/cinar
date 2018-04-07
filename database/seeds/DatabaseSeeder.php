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
         $this->call(UserSeeder::class);
         $this->call(SettingSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(EditionSeeder::class);
//        $this->call(ExamSeeder::class);
    }
}
