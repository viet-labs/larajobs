<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    use HasFactory;

    protected $table = 'cong_viec';

    public function toChuc()
    {
        // 1 ToChuc thuoc ve 1 User
        return $this->belongsTo(ToChuc::class);
    }

    public function user()
    {
        // 1 ToChuc thuoc ve 1 User
        return $this->belongsTo(User::class);
    }

    public function tuKhoas()
    {
        // 1 TuKhoa thuoc ve nhieu TuKhoa
        return $this->belongsToMany(TuKhoa::class);
    }
}
