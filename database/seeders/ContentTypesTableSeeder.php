<?php

namespace Database\Seeders;

use Models\Content;
use App\Models\ContentType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContentTypesTableSeeder extends Seeder
{
    protected $contentTypes = [
        'Artwork',
        'Anecdote',
    ];

    public function run()
    {
        foreach ($this->contentTypes as $contentType) {

            ContentType::updateOrCreate([
                'keyname' => Str::slug($contentType)
            ], [
                'name' => $contentType,
            ]);
        }
    }
}
