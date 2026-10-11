<?php

namespace Database\Seeders;

use App\Models\HabitLog;
use Illuminate\Database\Seeder;

class habitLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        HabitLog::factory()->count(5)->create();
    }
}
