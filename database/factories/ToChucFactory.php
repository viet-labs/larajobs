<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToChuc>
 */
class ToChucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count = User::count();

        return [
            'ten_cong_ty' => fake()->company(),
            'dia_chi_lien_he' => fake()->address(),
            'website_url' => 'https://' . Str::random(10) . '.com',
            'user_id' => $count > 0 ? rand(1, $count) : 1,
        ];
    }
}
