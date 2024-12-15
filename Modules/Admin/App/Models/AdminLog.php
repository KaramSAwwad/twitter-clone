<?php

namespace Modules\Admin\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'admin_id',
        'action',
        'details',
    ];

    /**
     * The admin user associated with this log.
     */
    public function admin()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'admin_id');
    }
}

