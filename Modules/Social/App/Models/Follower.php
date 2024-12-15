<?php

namespace Modules\Social\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follower extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'follower_id',
        'following_id',
    ];

    /**
     * The user who is following.
     */
    public function follower()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'follower_id');
    }

    /**
     * The user being followed.
     */
    public function following()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'following_id');
    }
}
