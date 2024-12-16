<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\Bookmark;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookmarks = [
            ['user_id' => 1, 'tweet_id' => 2],
            ['user_id' => 2, 'tweet_id' => 1],
        ];

        foreach ($bookmarks as $bookmark) {
            Bookmark::create($bookmark);
        }
    }
}
