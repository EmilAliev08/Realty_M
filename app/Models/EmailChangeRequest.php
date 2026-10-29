<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailChangeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'old_email',
        'new_email',
        'verification_code',
        'attempts_left',
        'expires_at',
        'status',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Проверка срока дейсвия заявки
    public function isExpired()
    {
        return $this->expires_at->isPast();
    }

    //Проверка активности заявки
    public function isPending()
    {
        return $this->status === 'pending' && !$this->isExpired();
    }
}