<?php

namespace Modules\Notification\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Notification\App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            ['user_id' => 1, 'type' => 'like', 'source_user_id' => 2, 'tweet_id' => 1, 'is_read' => false],
            ['user_id' => 2, 'type' => 'follow', 'source_user_id' => 1, 'tweet_id' => null, 'is_read' => true],
        ];

        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
