<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;
class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    //    comment
    
        $halls = [
            [
                'name' => 'Hall 1',
                'capacity' => 100,
                'schema_id' => 2, 
            ],
            [
                'name' => 'Hall 2',
                'capacity' => 150, 
                'schema_id' => 2, 
            ],
        ];

        foreach ($halls as $hallData) {
            Hall::create($hallData);
        }
    }
}
