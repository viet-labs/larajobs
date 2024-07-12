<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToChuc extends Model
{
    use HasFactory;

    protected $table = 'to_chuc';

    public function user()
    {
        // 1 ToChuc thuoc ve 1 User
        return $this->belongsTo(User::class);
    }

    public function congViecs()
    {
        // 1 ToChuc co nhieu CongViec
        return $this->hasMany(CongViec::class);
    }
}
