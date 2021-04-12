<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('children')->insert([
            'name' => 'Kenneth'
        ],[
            'name' => 'Daniel'
        ],[
            'name' => 'Bryan'
        ]);
    }
}
