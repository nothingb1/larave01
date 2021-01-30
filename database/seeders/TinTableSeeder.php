<?php

namespace Database\Seeders;

use App\Models\Tin;
use Illuminate\Database\Seeder;

class TinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tin::factory()->count(100)->create();

    }
}
