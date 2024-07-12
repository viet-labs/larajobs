<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuKhoa extends Model
{
    use HasFactory;

    protected $table = 'tu_khoa';

    public function congViecs()
    {
        // 1 TuKhoa thuoc ve nhieu CongViec
        return $this->belongsToMany(CongViec::class);
    }
}
