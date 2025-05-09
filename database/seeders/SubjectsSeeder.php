<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('subjects')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('subjects')->insert([
            ['name'=>'English'],
            ['name'=>'Maths'],
            ['name'=>'Social'],
            ['name'=>'Malayalam 1'],
            ['name'=>'Malayalam 2'],
            ['name'=>'Biology'],
            ['name'=>'Hindi'],
            ['name'=>'Computer'],
            ['name'=>'Physics'],
            ['name'=>'Chemistry'],

        ]);
    }
}
