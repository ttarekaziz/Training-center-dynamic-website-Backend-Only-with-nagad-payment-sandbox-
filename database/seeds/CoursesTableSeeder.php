<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Course::create([
            'title' => "GRAPHIC DESIGN",
            'department' => "GRAPHIC DESIGN",
            'total_classes' => "30",
            'description' => "Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.Graphic design is art with a purpose. It involves a creative and systematic plan to solve a problem or achieve certain objectives, with the use of images, symbols or even words. It is visual communication and the aesthetic expression of concepts and ideas using various graphic elements and tools.",
            'discount' => "50%",
            'duration' => "4",
            'course_fee' => "30000",
            'image' => "null",
            'overview' => "DMS Educationis a place for designers.

To find inspiration, resources, and thoughts that will be useful to their daily work.

Motion design is a discipline that applies graphic design principles to filmmaking and video production through use of animation",


        ]);
    }
}
