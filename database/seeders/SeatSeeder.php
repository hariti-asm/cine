<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $rows = ['A', 'B', 'C', 'D', 'E']; 
        $seatsPerRow = 10; 

        foreach ($rows as $row) {
            for ($i = 1; $i <= $seatsPerRow; $i++) {
                Seat::create([
                    'seat_number' => $row . $i,
                    'status' => 'available', 
                    'schema_id' => 1, 
                ]);
            }
        }
    }}
