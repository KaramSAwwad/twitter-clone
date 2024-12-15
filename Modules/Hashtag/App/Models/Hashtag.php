<?php

namespace Modules\Hashtag\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hashtag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag',
    ];

    /**
     * Get the tweets associated with this hashtag.
     */
    public function tweets()
    {
        return $this->belongsToMany(\Modules\Tweet\App\Models\Tweet::class, 'tweet_hashtags');
    }
}

