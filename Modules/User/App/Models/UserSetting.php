<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSetting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'notification_settings',
        'privacy_settings',
    ];

    /**
     * Get the user that owns these settings.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
