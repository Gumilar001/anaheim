<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Super Admin',
                'userName' => 'superadmin',
                'password' => bcrypt('superadmin'),
                'role' => 'super_admin'
            ],
            [
                'name' => 'Admin',
                'userName' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'name' => 'Executive',
                'userName' => 'executive',
                'password' => bcrypt('executive'),
                'role' => 'executive'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
