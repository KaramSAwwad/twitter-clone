<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            AdminLogSeeder::class,
        ]);
    }
}

/*
php artisan module:migrate User
php artisan module:migrate Hashtag
php artisan module:migrate Tweet
php artisan module:migrate Social
php artisan module:migrate Media
php artisan module:migrate Messaging
php artisan module:migrate Notification
php artisan module:migrate Trend
php artisan module:migrate Admin


php artisan module:seed User
php artisan module:seed Hashtag
php artisan module:seed Tweet
php artisan module:seed Social
php artisan module:seed Media
php artisan module:seed Messaging
php artisan module:seed Notification
php artisan module:seed Trend
php artisan module:seed Admin

*/
