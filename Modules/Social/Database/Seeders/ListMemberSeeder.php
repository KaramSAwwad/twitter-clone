<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\ListMember;

class ListMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listMembers = [
            ['user_list_id' => 1, 'member_id' => 2],
        ];

        foreach ($listMembers as $member) {
            ListMember::create($member);
        }
    }
}
