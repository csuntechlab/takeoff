<?php

use Illuminate\Database\Seeder;

class UsersInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_info')->insert([
            'user_id' => '1',
            'major' => 'CompSci',
            'grad_date' => '2021',
            'college' => 'Engineering',
            'bio' => 'asdasdsadasdasdsad',
            'research' => 'asdasdasdasdad',
            'fun_facts' => 'asdasdasdasdad',
            'academic_interest' => 'ASDASDASDASD'
        ]);
    }
}
