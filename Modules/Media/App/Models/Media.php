<?php

namespace Modules\Media\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'media_type',
        'media_url',
    ];

    /**
     * The user who uploaded the media.
     */
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class);
    }

    /**
     * The model associated with the media (polymorphic).
     */
    public function associated()
    {
        return $this->morphTo();
    }
}

