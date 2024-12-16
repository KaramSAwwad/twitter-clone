<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;

class SocialDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            FollowerSeeder::class,
            MuteSeeder::class,
            BlockSeeder::class,
            UserListSeeder::class,
            ListMemberSeeder::class,
            BookmarkSeeder::class,
        ]);
    }
}
