<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\Mute;

class MuteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mutes = [
            ['user_id' => 1, 'muted_user_id' => 2],
            ['user_id' => 2, 'muted_user_id' => 1],
        ];

        foreach ($mutes as $mute) {
            Mute::create($mute);
        }
    }
}
