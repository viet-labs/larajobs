<?php

namespace Database\Seeders;

use App\Models\ToChuc;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToChucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ToChuc::factory(10)->create();
    }
}
