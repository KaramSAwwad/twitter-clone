<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PasswordReset extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'token',
    ];

    /**
     * Get the user who requested the password reset.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
