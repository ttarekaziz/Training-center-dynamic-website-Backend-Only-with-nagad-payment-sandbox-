<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Facility::create([
            'name' => "24 hours online support",
            'description' => "To provide the best customer support to our valued customers, we offer 24/7 support! You are always welcome to call our offices during normal business hours.",
        ]);


        App\Models\Facility::create([
            'name' => "Furnished classroom",
            'description' => "Glocal understands that a student's learn from his environment and hence keeps fully furnished classroom.These facilities help students grow a lot.",
        ]);


        App\Models\Facility::create([
            'name' => "Video tutorial",
            'description' => "When you need to learn how to do something, what do you do? Watch a tutorial video of course! A video is a great addition to online learning.",
        ]);


        App\Models\Facility::create([
            'name' => "Experienced teacher",
            'description' => "Our Experienced teacher means meeting students on a regularly scheduled basis, delivering instruction,developing or preparing materials.",
        ]);


        App\Models\Facility::create([
            'name' => "Computer lab",
            'description' => "Computing Services.We understand that everyone does not have access to a computer at home, so we have provided a computer lab",
        ]);


        App\Models\Facility::create([
            'name' => "Personal tutor",
            'description' => "The service comes up with a personalized workplan for each student.Good Communication Skills and the Ability to Make Students Visualize.",
        ]);
    }
}
