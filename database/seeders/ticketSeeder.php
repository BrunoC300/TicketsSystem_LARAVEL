<?php

namespace Database\Seeders;

use App\Models\ticket;
use Illuminate\Database\Seeder;

class ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ticket::factory()->count(100)->create();
    }
}
