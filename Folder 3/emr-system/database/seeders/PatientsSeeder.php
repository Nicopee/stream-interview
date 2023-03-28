<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patients;
use App\Models\Appointments;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patients::factory()->count(10)->create()->each(function ($patient) {
            $patient->appointments()->saveMany(Appointments::factory()->count(2)->make());
        });

    }
}
