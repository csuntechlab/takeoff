<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Workshop;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $workshops = Workshop::all();
        $ids = [];
        foreach($workshops as $workshop) {
            foreach($users as $user) {
                if ($user->roles()->first()->role == 'student') {
                    $workshop->users()->attach($user->id);
                }
            }
        }
    }
}
