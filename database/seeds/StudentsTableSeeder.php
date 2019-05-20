<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstNames = ['', '', 'Tim', 'Alec', 'Josh', 'Anthony', 'Edgar', 'Jazmin', 'Zane', 'Mikkal', 'Nikitha', 'Raima', 'Carlos', 'Michael', 'Tony', 'Scott', 'Steve', 'Thor', 'Bruce', 'Wanda', 'Peter', 'Carol', 'Thanos'];
        $lastNames = ['', '', 'Brumbaugh', 'Marcum', 'Magaleno', 'Mikhail', 'Cano', 'Perex', 'Ervin', 'McNulty', 'Batchu', 'Hossain', 'Benavides', 'Chan', 'Stark', 'Lang', 'Rogers', 'Odinson', 'Banner', 'Maximoff', 'Parker', 'Danvers', 'Williams'];
        for($id = 2; $id <= 8; $id +=1)
        {
            $student = User::create([
                'id' => $id,
                'verified' => 1,
                'email' => strtolower($firstNames[$id]) . strtolower($lastNames[$id]) . '.test@gmail.com',
                'password' => Hash::make("password"),
            ]);
            $student->roles()->attach(1);
            $student_info = UserInfo::create([
                'id' => $id,
                'user_id' => $id,
                'first_name' => $firstNames[$id],
                'last_name' => $lastNames[$id],
                'title' => 'Student',
                'major' => 'Computer Science',
                'grad_date' => 'Spring 2020',
                'college' => 'Engineering & Computer Science',
                'bio' => 'Now this is a story all about how
                My life got flipped turned upside down
                And Id like to take a minute, just sit right there',
                'research' => 'Something',
                'academic_interest' => 'Computers,Monitors',
                'archive' => false
            ]);
        }
        for($id = 9; $id <= 17; $id +=1)
        {
            $student = User::create([
                'id' => $id,
                'verified' => 1,
                'email' =>  strtolower($firstNames[$id]) . strtolower($lastNames[$id]) . '.test@gmail.com',
                'password' => Hash::make("password"),
            ]);
            $student->roles()->attach(1);
            $student_info = UserInfo::create([
                'id' => $id,
                'user_id' => $id,
                'first_name' => $firstNames[$id],
                'last_name' => $lastNames[$id],
                'title' => 'Student',
                'major' => 'Psychology',
                'grad_date' => 'Spring 2021',
                'college' => 'Social & Behavioral Sciences',
                'bio' => 'Now this is a story all about how
                My life got flipped turned upside down
                And Id like to take a minute, just sit right there',
                'research' => 'Something',
                'academic_interest' => 'Brain,Sigmund Freud',
                'archive' => false
            ]);
        }
        for($id = 18; $id <= 22; $id +=1)
        {
            $student = User::create([
                'id' => $id,
                'verified' => 1,
                'email' =>  strtolower($firstNames[$id]) . strtolower($lastNames[$id]) . '.test@gmail.com',
                'password' => Hash::make("password"),
            ]);
            $student->roles()->attach(1);
            $student_info = UserInfo::create([
                'id' => $id,
                'user_id' => $id,
                'first_name' => $firstNames[$id],
                'last_name' => $lastNames[$id],
                'title' => 'Student',
                'major' => 'Biology',
                'grad_date' => 'Fall 2020',
                'college' => 'Science & Mathematics',
                'bio' => 'Now this is a story all about how
                My life got flipped turned upside down
                And Id like to take a minute, just sit right there',
                'research' => 'Something',
                'academic_interest' => 'Brain,Heart,Liver',
                'archive' => false
            ]);
        }
    }
}
