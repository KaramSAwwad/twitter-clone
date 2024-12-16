<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\Block;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blocks = [
            ['user_id' => 1, 'blocked_user_id' => 2],
            ['user_id' => 2, 'blocked_user_id' => 1],
        ];

        foreach ($blocks as $block) {
            Block::create($block);
        }
    }
}
