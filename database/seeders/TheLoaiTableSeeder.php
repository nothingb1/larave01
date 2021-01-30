<?php

namespace Database\Seeders;

use App\Models\TheLoai;
use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TheLoai::factory()->count(100)->create();
    }
}
