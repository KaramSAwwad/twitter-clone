<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\App\Models\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessions = [
            [
                'user_id' => 1,
                'token' => bcrypt('session_token_1'),
                'created_at' => now(),

                'ip_address' => '192.168.1.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
            ],
            [
                'user_id' => 2,
                'token' => bcrypt('session_token_2'),
                'created_at' => now(),

                'ip_address' => '192.168.1.2',
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)',
            ],
        ];

        foreach ($sessions as $session) {
            Session::create($session);
        }
    }
}
