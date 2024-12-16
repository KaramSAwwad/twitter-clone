<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\App\Models\UserSetting;

class UserSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'user_id' => 1,
                'notification_settings' => json_encode([
                    'email_notifications' => true,
                    'push_notifications' => true,
                ]),
                'privacy_settings' => json_encode([
                    'profile_visibility' => 'public',
                    'message_privacy' => 'everyone',
                ]),
            ],
            [
                'user_id' => 2,
                'notification_settings' => json_encode([
                    'email_notifications' => false,
                    'push_notifications' => true,
                ]),
                'privacy_settings' => json_encode([
                    'profile_visibility' => 'private',
                    'message_privacy' => 'followers',
                ]),
            ],
        ];

        foreach ($settings as $setting) {
            UserSetting::create($setting);
        }
    }
}

