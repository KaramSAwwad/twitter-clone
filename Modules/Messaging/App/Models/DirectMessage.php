<?php

namespace Modules\Messaging\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DirectMessage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'content',
        'media_url',
        'is_read',
    ];

    /**
     * The user who sent the direct message.
     */
    public function sender()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'sender_id');
    }

    /**
     * The user who received the direct message.
     */
    public function receiver()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'receiver_id');
    }
}

