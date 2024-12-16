<?php

namespace Modules\Hashtag\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Hashtag\App\Models\Hashtag;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hashtags = [
            ['tag' => '#Laravel'],
            ['tag' => '#PHP'],
            ['tag' => '#Coding'],
            ['tag' => '#WebDevelopment'],
            ['tag' => '#OpenSource'],
        ];

        foreach ($hashtags as $hashtag) {
            Hashtag::create($hashtag);
        }
    }
}
