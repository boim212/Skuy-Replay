<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Semester::insert([
            ['name'=>'Semester-I',],
            ['name'=>'Semester-II',],
            ['name'=>'Semester-III',],
            ['name'=>'Semester-IV',],
            ['name'=>'Semester-V',],
            ['name'=>'Semester-VI',],
            ['name'=>'Semester-VII',],
            ['name'=>'Semester-VIII',],
        ]);
    }
}
