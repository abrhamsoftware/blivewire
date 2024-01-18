<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $filable = [
        'user_id','name'
    ];

    public function user():BelongsTo
    {
        $this->belongsTo(User::class);
    }
}
