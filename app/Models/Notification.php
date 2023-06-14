<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'route',
        'status',
        'user_id',
        'expire_at',
        'type',
        'sender',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
