<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
        {

            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            DB::table('teachers')->truncate();

            Db::statement('SET FOREIGN_KEY_CHECKS=1;');

            DB::table('teachers')->insert([
                'name'=>'teacher 1',
                'username'=>'teacher_1',
                'password'=>Hash::make('123456789'),
            ]);
        }
}
