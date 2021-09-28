<?php



namespace Database\Seeders;

use App\Models\estado;
use Illuminate\Database\Seeder;

class estadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estado::create(['estado' => 'Pendente']);
        estado::create(['estado' => 'Resolvido']);
        estado::create(['estado' => 'Aguarda orçamento']);
    }
}
