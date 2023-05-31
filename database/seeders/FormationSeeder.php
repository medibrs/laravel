<?php

namespace Database\Seeders;


use App\Models\formation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Formation::factory()->count(50)->create();
    }
}
