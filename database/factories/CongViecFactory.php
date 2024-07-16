<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ToChuc;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CongViec>
 */
class CongViecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $maxNbChars = 200;
        $minNbChars = 50;
        $min = 8000000;
        $max = 10000000;
        $format = 'Y-m-d';
        $countUser = User::count();
        $countToChuc = ToChuc::count();
        $arrayHinhThucLamViec = ['remote', 'offline', 'hybird'];
        $arrayLoaiCongViec = ['fulltime', 'parttime', 'intern'];

        return [
            'tieu_de' => fake()->text($minNbChars),
            'hinh_thuc_lam_viec' => $arrayHinhThucLamViec[rand(0, 2)],
            'loai_cong_viec' => $arrayLoaiCongViec[rand(0, 2)],
            'dia_chi_lam_viec' => fake()->address(),
            'noi_dung' => fake()->text($maxNbChars),
            'muc_luong_toi_thieu' => fake()->numberBetween($min, $max),
            'muc_luong_toi_da' => fake()->numberBetween($min, $max),
            'luot_xem' => fake()->randomDigit(),
            'ngay_het_han' => fake()->date($format, $max = 'now'),
            'user_id' => $countUser > 0 ? rand(1, $countUser) : 1,
            'to_chuc_id' => $countToChuc > 0 ? rand(1, $countToChuc) : 1,
        ];
    }
}
