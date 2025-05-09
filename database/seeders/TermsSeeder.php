<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('terms')->truncate();

        Db::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('terms')->insert([
            ['name'=>'Quaterly'],
            ['name'=>'halfyearly'],
            ['name'=>'annualy'],
        ]);
    }
}
