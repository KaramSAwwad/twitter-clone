<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tweet\App\Models\Retweet;

class RetweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $retweets = [
            ['user_id' => 2, 'tweet_id' => 1, 'retweet_comment' => 'Agreed, this is awesome!'],
            ['user_id' => 1, 'tweet_id' => 2, 'retweet_comment' => null],
        ];

        foreach ($retweets as $retweet) {
            Retweet::create($retweet);
        }
    }
}
