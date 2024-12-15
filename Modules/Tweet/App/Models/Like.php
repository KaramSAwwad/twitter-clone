<?php

namespace Modules\Tweet\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'tweet_id',
    ];

    /**
     * The user who liked the tweet.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }

    /**
     * The tweet that was liked.
     */
    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }
}
