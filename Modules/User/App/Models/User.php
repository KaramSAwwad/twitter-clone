<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'username',
        'email',
        'password',
        'full_name',
        'bio',
        'profile_picture_url',
        'header_image_url',
        'website_url',
        'location',
        'date_of_birth',
        'is_verified',
        'is_private',
        'account_status',
        'phone_number',
        'email_verified',
        'phone_verified',
        'direct_message_settings',
    ];

    /**
     * Get the user's tweets.
     */
    public function tweets()
    {
        return $this->hasMany(\Modules\Tweet\App\Models\Tweet::class);
    }

    /**
     * Get the user's settings.
     */
    public function settings()
    {
        return $this->hasOne(UserSetting::class);
    }

    /**
     * Get the user's followers.
     */
    public function followers()
    {
        return $this->hasMany(\Modules\Social\App\Models\Follower::class, 'following_id');
    }

    /**
     * Get the user's following.
     */
    public function following()
    {
        return $this->hasMany(\Modules\Social\App\Models\Follower::class, 'follower_id');
    }
}
