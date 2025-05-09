<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Section::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('sections')->insert([
            ['name'=>'class A'],
            ['name'=>'class B'],
            ['name'=>'class C'],
        ]);

    }
}
