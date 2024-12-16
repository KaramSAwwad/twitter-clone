<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'john_doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password'),
                'full_name' => 'John Doe',
                'bio' => 'This is John’s bio.',
                'profile_picture_url' => 'https://example.com/profile/john.jpg',
                'is_verified' => true,
                'is_private' => false,
                'account_status' => 'active',
            ],
            [
                'username' => 'jane_doe',
                'email' => 'jane@example.com',
                'password' => bcrypt('password'),
                'full_name' => 'Jane Doe',
                'bio' => 'This is Jane’s bio.',
                'profile_picture_url' => 'https://example.com/profile/jane.jpg',
                'is_verified' => false,
                'is_private' => true,
                'account_status' => 'active',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
