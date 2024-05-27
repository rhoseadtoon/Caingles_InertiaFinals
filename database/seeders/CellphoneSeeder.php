<?php

namespace Database\Seeders;
use App\Models\Cellphone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CellphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cellphone::factory()->count(10)->create();
    }
}
