<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder {
    public function run(): void {
        User::create(['name' => 'Farrel', 'email' => 'farrel@example.com']);
        User::create(['name' => 'Mario', 'email' => 'mario@example.com']);
    }
}
