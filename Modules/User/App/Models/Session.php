<?php
namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'token',
        'created_at',
        'expires_at',
        'ip_address',
        'user_agent',
    ];

    /**
     * Get the user for this session.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
