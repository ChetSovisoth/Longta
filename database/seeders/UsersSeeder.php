<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                "name"=> "admin",
                "email"=> "admin@jobboard.com",
                "role"=> "admin",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Yean Daralongta",
                "email"=> "daralongta@gmail.com",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Chet Sovisoth",
                "email"=> "sovisoth@gmail.com",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Srun Davith",
                "email"=> "davith@gmail.com",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Thy Chamroeunpiseth",
                "email"=> "chamroeunpiseth@gmail.com",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Sok Sousrun",
                "email"=> "sousrun@gmail.com",
                "role"=> "employer",
                "password"=> Hash::make("123456789"),
            ],
            [
                "name"=> "Say Vanchhai",
                "email"=> "vanchhai@gmail.com",
                "role"=> "seeker",
                "password"=> Hash::make("123456789"),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
