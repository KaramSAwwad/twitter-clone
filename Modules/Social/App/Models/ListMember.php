<?php

namespace Modules\Social\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'list_id',
        'member_id',
    ];

    /**
     * The list to which the user belongs.
     */
    public function list()
    {
        return $this->belongsTo(\Modules\Social\App\Models\List::class);
    }

    /**
     * The user who is a member of the list.
     */
    public function member()
    {
        return $this->belongsTo(\Modules\User\App\Models\User::class, 'member_id');
    }
}
