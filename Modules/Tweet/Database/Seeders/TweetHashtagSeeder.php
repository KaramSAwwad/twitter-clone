<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tweet\App\Models\TweetHashtag;

class TweetHashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tweetHashtags = [
            ['tweet_id' => 2, 'hashtag_id' => 1], // #Laravel
            ['tweet_id' => 2, 'hashtag_id' => 2], // #PHP
        ];

        foreach ($tweetHashtags as $tweetHashtag) {
            TweetHashtag::create($tweetHashtag);
        }
    }
}
