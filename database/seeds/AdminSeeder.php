<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'id' => 1,
            'email' => 'adminemail@gmail.com',
            'password' => Hash::make("test123"),
            'verified' => 1
        ]);
        $admin->roles()->attach(2);
    }
}
