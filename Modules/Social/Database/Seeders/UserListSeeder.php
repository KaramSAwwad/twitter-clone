<?php

namespace Modules\Social\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\App\Models\UserList;

class UserListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            ['user_id' => 1, 'name' => 'Developers', 'description' => 'A list of developers', 'is_private' => false],
            ['user_id' => 2, 'name' => 'Friends', 'description' => 'A list of close friends', 'is_private' => true],
        ];

        foreach ($lists as $list) {
            UserList::create($list);
        }
    }
}
