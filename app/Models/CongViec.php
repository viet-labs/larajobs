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
        return $this->belongsTo(ToChuc::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tuKhoas()
    {
        return $this->belongsToMany(TuKhoa::class);
    }
}
