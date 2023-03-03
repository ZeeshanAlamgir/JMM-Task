<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Employee())->create([
            'name'=>'zeeshan',
            'designation'=>'Developer',
            'contact_no'=> '0202020202',
            'address'=>'peshawar'
        ]);
    }
}
