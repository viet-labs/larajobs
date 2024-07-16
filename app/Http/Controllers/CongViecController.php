<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use Illuminate\Http\Request;

class CongViecController extends Controller
{
    public function testdb(Request $request)
    {
        $congviecList = [];
        for($i = 0; $i < 10; $i++){
            $congviecList[] = [
                'tieu_de' => 'Tieu De' . $i,
                'hinh_thuc_lam_viec' => 'Hinh Thuc Lam Viec' . $i,
                'loai_cong_viec' => 'Loai Cong Viec' . $i,
                'dia_chi_lam_viec' => 'Dia Chi Lam Viec' . $i,
                'noi_dung' => 'Noi Dung' . $i,
                'muc_luong_toi_thieu' => 'Muc Luong Toi Thieu' . $i,
                'muc_luong_toi_da' => 'Muc Luong To Da' . $i,
                'luot_xem' => 'Luot Xem' . $i,
                'ngay_het_han' => 'Ngay Het Han' . $i
            ];
        }
    }
}
