<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create([
        	'nama'=>'Rani',
        	'jk'=>'P'
        ]);

        \App\Student::create([
        	'nama'=>'Maulana',
        	'jk'=>'L'
        ]);
    }
}
