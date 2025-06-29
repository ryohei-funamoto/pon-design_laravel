<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'inquiry_type',
        'name',
        'company_name',
        'email',
        'tel',
        'content',
        'know'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
