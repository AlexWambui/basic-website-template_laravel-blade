<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function getExcerptAttribute(): string
    {
        return Str::limit($this->message, 50, '...');
    }
}
