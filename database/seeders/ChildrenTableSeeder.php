<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildrenTableSeeder extends Seeder
{
    protected $children = [
        'Kenneth',
        'Daniel',
        'Bryan'
    ];



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
