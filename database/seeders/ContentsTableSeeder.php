<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'child_id'=> '2',
            'content_type_id'=>'2',
            'title' => 'SuperMario', 
            'description' =>'Description',
            'date' =>'2020/02/02',
            'location'=>'Kooiweg',
            'created_by_user_id'=>'1'
        ],[
            'child_id'=> '1',
            'content_type_id'=>'6',
            'title' => 'Minecraft', 
            'description' =>'Description of minderaft',
            'date' =>'2020/02/04',
            'location'=>'Pottenbakkersdonk',
            'created_by_user_id'=>'2'
        ],[
            'child_id'=> '2',
            'content_type_id'=>'1',
            'title' => 'Minecraft', 
            'description' =>'Description of minderaft',
            'date' =>'2020/02/05',
            'location'=>'Pottenbakkersdonk',
            'created_by_user_id'=>'2'

        ],[
            'child_id'=> '3',
            'content_type_id'=>'3',
            'title' => 'Minecraft', 
            'description' =>'Description of minderaft',
            'date' =>'2020/02/5',
            'location'=>'Pottenbakkersdonk',
            'created_by_user_id'=>'2'
        ],[
            'child_id'=> '1',
            'content_type_id'=>'4',
            'title' => 'Minecraft', 
            'description' =>'Description of minderaft',
            'date' =>'2020/02/09',
            'location'=>'Pottenbakkersdonk',
            'created_by_user_id'=>'2'
        ],[
            'child_id'=> '2',
            'content_type_id'=>'5',
            'title' => 'Minecraft', 
            'description' =>'Description of minderaft',
            'date' =>'2020/01/04',
            'location'=>'Kooiweg',
            'created_by_user_id'=>'1'
        ]);
    }
}
