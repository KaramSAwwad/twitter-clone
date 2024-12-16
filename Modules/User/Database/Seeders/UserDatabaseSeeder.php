<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds for the User module.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UserSettingSeeder::class,
            PasswordResetSeeder::class,
            SessionSeeder::class,
        ]);
    }
}
