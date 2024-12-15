<?php

namespace Modules\Tweet\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tweet_id',
        'user_id',
        'content',
    ];

    /**
     * The tweet this reply belongs to.
     */
    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }

    /**
     * The user who created the reply.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }
}
