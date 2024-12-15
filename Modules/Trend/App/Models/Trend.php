<?php

namespace Modules\Trend\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trend extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag',
        'tweet_volume',
        'expires_at',
    ];

    /**
     * Hashtags associated with this trend.
     */
    public function hashtags()
    {
        return $this->hasMany(\Modules\Hashtag\App\Models\Hashtag::class, 'tag', 'tag');
    }
}
