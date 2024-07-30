<?php

namespace App\Models;

use App\Models\CongViec;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ToChuc extends Model
{
    use HasFactory;

    protected $table = 'to_chuc';

    protected $fillable = [
        'ten_cong_ty',
        'dia_chi_lien_he',
        'website_url',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function congViecs()
    {
        return $this->hasMany(CongViec::class);
    }
}
