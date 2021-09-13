<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Department::create([
            'name' => "GRAPHIC DESIGN",
            'description' => "Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.Graphic design is art with a purpose. It involves a creative and systematic plan to solve a problem or achieve certain objectives, with the use of images, symbols or even words. It is visual communication and the aesthetic expression of concepts and ideas using various graphic elements and tools.",
            'image'=>"hululu",
            'status'=>"active"
            ]);


            App\Models\Department::create([
                'name' => "MARKETING",
                'description' => "Marketing is the promotion of business products or services to a target audience.Common examples of marketing at work include television commercials, billboards on the side of the road, and magazine advertisements. But not all businesses approach the need to market their goods and services the same way.Marketing is the promotion of business products or services to a target audience.Common examples of marketing at work include television commercials, billboards on the side of the road, and magazine advertisements. But not all businesses approach the need to market their goods and services the same way.",
                'image'=>"hululu",
                'status'=>"active"
                ]);


                App\Models\Department::create([
                    'name' => "DEVELOPMENT",
                    'description' => "Development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience. Web developers, or 'devs', do this by using a variety of coding languages.Web development refers to building, creating, and maintaining websites. It includes aspects such as web design, web publishing, web programming, and database management. While the terms web developer and web designer are often used synonymously, they do not mean the same thing.it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless.",
                    'image'=>"hululu",
                    'status'=>"active"
                    ]);
    


        


    }
}
