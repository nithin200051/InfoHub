<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'John Doe', 'department_id' => 1, 'designation_id' => 1, 'phone_number' => '1234567890'],
            ['name' => 'Jane Smith', 'department_id' => 2, 'designation_id' => 2, 'phone_number' => '0987654321'],
            ['name' => 'Jack rose', 'department_id' => 3, 'designation_id' => 3, 'phone_number' => '0912365431'],
        ]);
    }
}
