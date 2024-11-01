<?php

namespace Database\Seeders;

use App\Models\Iklan;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\User;
use App\Models\user_type;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'type' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin#123'),
        ]);
    }
}
