<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\About::create([
            'title' => "BEST FREELANCING & OUTSOURCING TRAINING CENTER",
            'image'=>"hululu",
            'description' => "Freelancer argues that online outsourcing makes workers “more accountable”.With 54% of traditional workers in the U.S.“sleepwalk through their day” and an additional 18% actively sabotage other workers, a Gallup Research says,“in today’s competitive environment,that’s simply unacceptable,”says Freelancer founder Ian Ippolito.“When I hire a traditional employee, I can’t be sure they’ll do the job right,spending time at the water cooler or playing solitaire instead.We’re proud to guarantee performance,”Ippolito said.To hire a quality programmer in California is probably going to set you back $80-$120 per hour. Using outsourced web sites you can find quality programmers.",
            'mission' => "We believe that if Education First delivers consistently excellent work and builds capacity in organizations to improve and influence what matters most for student learning, then we will advance the vision of preparing all students and particularly low-income students and students of color for success in life.Our mission is to deliver exceptional ideas,experience-based solutions and results so all students and particularly low-income students and students of color are prepared.",
            'mission_image' => "abadoto nai",
            'vission' => "We envision a world in which every student is prepared to succeed—a world in which income and race no longer determine the quality of education.Education First has a robust strategy to build our staff and organizational capacity to lead on issues of equity,and to increase diversity, equity and inclusion at all levels of the firm. We also have a deep commitment to, and growing experience with, helping clients elevate,interrogate and take seriously how they pursue equity in their work.",
            'vission_image' => "abadoto nai"
        ]);
    }
}
