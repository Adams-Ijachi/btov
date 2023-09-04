<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {

        \App\Models\Doctor::factory()->count(10)->create();
    }
}
