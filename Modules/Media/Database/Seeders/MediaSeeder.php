<?php

namespace Modules\Media\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Media\App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $media = [
            [
                'user_id' => 1,
                'media_type' => 'image',
                'media_url' => 'https://example.com/images/pic1.jpg',
            ],
            [
                'user_id' => 2,
                'media_type' => 'video',
                'media_url' => 'https://example.com/videos/video1.mp4',
            ],
        ];

        foreach ($media as $item) {
            Media::create($item);
        }
    }
}
