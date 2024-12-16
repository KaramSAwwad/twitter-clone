<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\App\Models\AdminLog;

class AdminLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logs = [
            ['admin_id' => 1, 'action' => 'Deleted Tweet', 'details' => 'Deleted tweet ID 3 for inappropriate content'],
            ['admin_id' => 2, 'action' => 'Suspended User', 'details' => 'Suspended user ID 4 for spamming'],
        ];

        foreach ($logs as $log) {
            AdminLog::create($log);
        }
    }
}
