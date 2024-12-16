<?php

namespace Modules\Messaging\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Messaging\App\Models\DirectMessage;

class DirectMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'content' => 'Hi there! How are you?',
                'is_read' => false,
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 1,
                'content' => 'I am good, thank you! What about you?',
                'is_read' => true,
            ],
        ];

        foreach ($messages as $message) {
            DirectMessage::create($message);
        }
    }
}
