<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\Follower;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $followers = [
            ['follower_id' => 1, 'following_id' => 2],
            ['follower_id' => 2, 'following_id' => 1],
        ];

        foreach ($followers as $follower) {
            Follower::create($follower);
        }
    }
}
