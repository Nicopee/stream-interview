<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staffs;
use App\Models\Patients;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointments>
 */
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clinical_notes' => fake()->wordwrap,
            'appointment_date' => fake()->date,
            'appointment_time' => fake()->time,
            'staff_id' => fake()->numberBetween(1,Staffs::count()),
            'patient_id' => fake()->numberBetween(1,Patients::count()),
            'status' => 'pending',
        ];
    }
}
