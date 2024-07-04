<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'cesar@hotmail.com.br')->first()){
            User::create([
                'name' => 'Cesar',
                'email' => 'cesar@hotmail.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'kelly@hotmail.com.br')->first()){
            User::create([
                'name' => 'Kelly',
                'email' => 'kelly@hotmail.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'jessica@hotmail.com.br')->first()){
            User::create([
                'name' => 'Jessica',
                'email' => 'jessica@hotmail.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'gabrielly@hotmail.com.br')->first()){
            User::create([
                'name' => 'Gabrielly',
                'email' => 'gabrielly@hotmail.com.br',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
    }
}
