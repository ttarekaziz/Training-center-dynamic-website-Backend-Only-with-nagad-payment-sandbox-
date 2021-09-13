<?php
use App\Welcome;

use Illuminate\Database\Seeder;

class WelcomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Models\Welcome::create([
        	'title'=>'DMS EDUCATION INSTITUTE',
        	'description'=>"DMS Education Institute is a professional outsourcing training, freelancing and IT training company in World with a good reputation, and open skill-set. We are a professional IT Training Company in World. We providing a range of affordable freelancing training to our student. Our goal is the success of our student and client and builds stable communication and marketing strategy.We are a professional IT Training Company in World. We providing a range of affordable freelancing training to our student.We are a professional IT Training Company in World.",
            'image'=> "abadoto nai"
         ]);
    }
}
