<?php

namespace Modules\Social\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'blocked_user_id',
    ];

    /**
     * The user who blocked another user.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'user_id');
    }

    /**
     * The user who is blocked.
     */
    public function blockedUser()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'blocked_user_id');
    }
}

