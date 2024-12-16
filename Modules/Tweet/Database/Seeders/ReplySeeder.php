<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tweet\App\Models\Reply;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $replies = [
            [
                'tweet_id' => 1,
                'user_id' => 2,
                'content' => 'I completely agree!',
            ],
            [
                'tweet_id' => 2,
                'user_id' => 1,
                'content' => 'Laravel is the best framework out there!',
            ],
        ];

        foreach ($replies as $reply) {
            Reply::create($reply);
        }
    }
}
