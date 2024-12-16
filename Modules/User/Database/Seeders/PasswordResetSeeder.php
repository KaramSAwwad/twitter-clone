<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\App\Models\PasswordReset;

class PasswordResetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resets = [
            [
                'user_id' => 1,
                'token' => bcrypt('reset_token_1'),
            ],
            [
                'user_id' => 2,
                'token' => bcrypt('reset_token_2'),
            ],
        ];

        foreach ($resets as $reset) {
            PasswordReset::create($reset);
        }
    }
}
