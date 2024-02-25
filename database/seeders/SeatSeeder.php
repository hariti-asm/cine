<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = [];
        
        for ($i = 1; $i <= 20; $i++) {
            $seat = [
                'seat_number' => 'A' . $i,
                'status' => 'available',
                'hall_id' => 2,
            ];

            $seat['type'] = rand(0, 1) ? 'VIP' : 'Regular';

            $seats[] = $seat;
        }

        foreach ($seats as &$seat) {
            $seat['price'] = $seat['type'] === 'VIP' ? 15 : 10;
        }

        Seat::insert($seats);
    }
}
