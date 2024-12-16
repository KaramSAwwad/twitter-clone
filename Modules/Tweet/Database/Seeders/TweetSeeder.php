<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tweet\App\Models\Tweet;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tweets = [
            [
                'user_id' => 1,
                'content' => 'Hello, this is my first tweet!',
                'media_url' => null,
                'is_retweet' => false,
                'visibility' => 'public',
            ],
            [
                'user_id' => 2,
                'content' => 'Learning Laravel is fun! #Laravel',
                'media_url' => 'https://example.com/media/laravel.png',
                'is_retweet' => false,
                'visibility' => 'followers',
            ],
        ];

        foreach ($tweets as $tweet) {
            Tweet::create($tweet);
        }
    }
}
