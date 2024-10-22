<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'mas user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'mas admin',
                'email' => 'superadmin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('1234567')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
            
        }
    }
}
