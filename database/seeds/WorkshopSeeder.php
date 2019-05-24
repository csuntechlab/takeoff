<?php

use Illuminate\Database\Seeder;
use App\Models\Workshop;
use Carbon\Carbon;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=3; $i++) {
            Workshop::create([
                'instructor' => 'Mikkal',
                'about_instructor' => 'really great guy honestly the best',
                'assignment_info' => 'Create a website to track attendence but learn to spell attendance',
                'workshop_name' => 'Workshop #' . $i,
                'workshop_description' => 'Test workshop heres some details: ligma',
                'date' => Carbon::parse('03/03/9999')
            ]);
        }
    }
}
