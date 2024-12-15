<?php

namespace Modules\Social\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookmark extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'tweet_id',
    ];

    /**
     * The user who bookmarked the tweet.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }

    /**
     * The tweet that was bookmarked.
     */
    public function tweet()
    {
        return $this->belongsTo(\Modules\Tweet\App\Models\Tweet::class);
    }
}

