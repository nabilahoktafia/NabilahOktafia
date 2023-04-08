<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        users::create([
            'nama'=>'Admin1',
            'username'=>'admin1',
            'password'=>'admin1',
            'level'=>'admin'
        ]);
    }
}
