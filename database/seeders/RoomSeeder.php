<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (range(1, 3) as $value) {

            Room::create([
                'name' => 'Deluxe',
                'hotel_id' => $value,
                'price' => 1000000,
                'status' => 'available'
            ]);

            Room::create([
                'name' => 'Superior',
                'hotel_id' => $value,
                'price' => 2000000,
                'status' => 'available'
            ]);
        }
    }
}
