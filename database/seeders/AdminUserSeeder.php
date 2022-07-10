<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' =>'Super Admin',
                'email' =>'admin@test',
                'password'=>bcrypt('123456678'),
                'role_id'=>'1'
            ]
        );
    }
}
