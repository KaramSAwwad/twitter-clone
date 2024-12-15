<?php

namespace Modules\Notification\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'source_user_id',
        'tweet_id',
        'data',
        'is_read',
    ];

    /**
     * The user who received the notification.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }

    /**
     * The user who triggered the notification.
     */
    public function sourceUser()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'source_user_id');
    }

    /**
     * The tweet associated with the notification (if applicable).
     */
    public function tweet()
    {
        return $this->belongsTo(\Modules\Tweet\App\Models\Tweet::class);
    }
}
