<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tweet\App\Models\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $likes = [
            ['user_id' => 1, 'tweet_id' => 2],
            ['user_id' => 2, 'tweet_id' => 1],
        ];

        foreach ($likes as $like) {
            Like::create($like);
        }
    }
}
