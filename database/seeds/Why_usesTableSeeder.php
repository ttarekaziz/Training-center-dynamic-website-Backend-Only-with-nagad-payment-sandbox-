<?php

use Illuminate\Database\Seeder;

class Why_usesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Why_us::create([
        	'title'=>'Quality Teaching',
        	'description'=>"With our experienced and inspiring tutors. you’ll receive more individual attention This exceptional tutorial support",
         ]);


         App\Models\Why_us::create([
        	'title'=>'Studying Locally',
        	'description'=>"It so much easier to reach your potential and timetables structured you can fit study around your job and existing.",
         ]);



         App\Models\Why_us::create([
        	'title'=>'Learning Center',
        	'description'=>"Well-furnished classrooms and a fully equipped computer/study room.Our fees are considerably lower than others",
         ]);
    }
}
