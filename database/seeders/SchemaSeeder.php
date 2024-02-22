<?php 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'layout' => json_encode([
                ['seat1', 'seat2'],
                ['seat3', 'seat4', 'seat5'],
                ['seat6', 'seat7', 'seat8', 'seat9']
            ])
        ]);

        Schema::create([
            'name' => 'Schema 2',
            'layout' => json_encode([
                ['seat10', 'seat11'],
                ['seat12', 'seat13', 'seat14'],
                ['seat15', 'seat16', 'seat17', 'seat18', 'seat19']
            ])
        ]);

        Schema::create([
            'name' => 'Schema 3',
            'layout' => json_encode([
                ['seat20', 'seat21', 'seat22'],
                ['seat23', 'seat24'],
                ['seat25', 'seat26', 'seat27', 'seat28']
            ])
        ]);
    }
}
