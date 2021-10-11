<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Igor',
            'email' => 'igorrogi036@gmail.com',
            'password' => Hash::make('ACUnaiIgor123')
        ]);
        User::create([
            'name' => 'Admin Promitech',
            'email' => 'admin@promitech.com.br',
            'password' => Hash::make('Promitech102030')
        ]);
    }
}
