<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@patrulleros.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'type' => 'admin',
        ]);
    }
}
