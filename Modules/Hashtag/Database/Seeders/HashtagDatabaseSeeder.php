<?php

namespace Modules\Hashtag\Database\Seeders;

use Illuminate\Database\Seeder;

class HashtagDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            HashtagSeeder::class,
        ]);
    }
}
