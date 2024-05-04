<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
        use HasFactory;

        protected $fillable = ['name','title', 'subtitle', 'image','link', 'size', 'publish_at', 'publish_until', 'is_published'];

        protected $casts = [
            'publish_at' => 'datetime',
            'publish_until' => 'datetime',
            'is_published' => 'boolean',
        ];

}
