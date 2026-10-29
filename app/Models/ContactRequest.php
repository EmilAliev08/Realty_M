<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение этих полей
    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message',
        'agreed_to_processing',
    ];

    protected $casts = [
        'agreed_to_processing' => 'boolean',
    ];
}