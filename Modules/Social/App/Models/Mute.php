<?php

namespace Modules\Social\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'muted_user_id',
    ];

    /**
     * The user who muted another user.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'user_id');
    }

    /**
     * The user who is muted.
     */
    public function mutedUser()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'muted_user_id');
    }
}

