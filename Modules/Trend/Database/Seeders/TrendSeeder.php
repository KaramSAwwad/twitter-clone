<?php

namespace Modules\Trend\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Trend\App\Models\Trend;

class TrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trends = [
            ['tag' => '#Laravel', 'tweet_volume' => 1200],
            ['tag' => '#PHP', 'tweet_volume' => 850],
        ];

        foreach ($trends as $trend) {
            Trend::create($trend);
        }
    }
}
