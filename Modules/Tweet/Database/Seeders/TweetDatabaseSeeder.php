<?php

namespace Modules\Tweet\Database\Seeders;

use Illuminate\Database\Seeder;

class TweetDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TweetSeeder::class,
            LikeSeeder::class,
            RetweetSeeder::class,
            ReplySeeder::class,
            TweetHashtagSeeder::class,
        ]);
    }
}
