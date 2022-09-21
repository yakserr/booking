<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'name'  => 'Grand Indonesia'
        ]);

        Hotel::create([
            'name'  => 'Oyo '
        ]);

        Hotel::create([
            'name'  => 'Red Door'
        ]);
    }
}
