<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
