<?php

namespace Database\Seeders;

use App\Models\Content as ModelsContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Models\Content;
//use Models\ContentType;

class ContentTypesTableSeeder extends Seeder
{
    protected $content_types = [
        '1' => 'Artwork',
        '2' => 'Anecdote'
    ];

    public function run()
    {
        foreach ($this->content_types as $type_id =>$type_name)
        {
            DB::create([

                'id' => $type_id
            ], [
                'keyname' =>str_slug($type_name),
                'name'   => $type_name
            ]);
        }
    }
}
