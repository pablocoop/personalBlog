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
        $user = new User();

        $user->name = 'Pablo Osorio';
        $user->email = 'pablo@gmail.com';
        $user->password =  bcrypt('1234');

        $user->save();

        User::factory(10)->create();
    }
}
