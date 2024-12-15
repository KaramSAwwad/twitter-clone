<?php

namespace Modules\Tweet\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TweetHashtag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tweet_id',
        'hashtag_id',
    ];

    /**
     * The tweet associated with this pivot.
     */
    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }

    /**
     * The hashtag associated with this pivot.
     */
    public function hashtag()
    {
        return $this->belongsTo(\Modules\Hashtag\App\Models\Hashtag::class);
    }
}
