<?php

namespace Modules\Tweet\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'content',
        'media_url',
        'is_retweet',
        'original_tweet_id',
        'reply_to_tweet_id',
        'reply_to_user_id',
        'visibility',
    ];

    /**
     * The user who created the tweet.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }

    /**
     * Likes associated with the tweet.
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Retweets associated with the tweet.
     */
    public function retweets()
    {
        return $this->hasMany(Retweet::class);
    }

    /**
     * Replies associated with the tweet.
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'reply_to_tweet_id');
    }

    /**
     * Hashtags associated with the tweet.
     */
    public function hashtags()
    {
        return $this->belongsToMany(\Modules\Hashtag\App\Models\Hashtag::class, 'tweet_hashtags');
    }
}

