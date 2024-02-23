<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Schema;

class SchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create([
            'name' => 'Schema 1',
            'rows' => 7,
            'seats_per_row' => 7,
            'sides' => 'double', // One side
        ]);

        Schema::create([
            'name' => 'Schema 2',
            'rows' => 10,
            'seats_per_row' => 8,
            'sides' => 'double', // Two sides
        ]);
    }
}
