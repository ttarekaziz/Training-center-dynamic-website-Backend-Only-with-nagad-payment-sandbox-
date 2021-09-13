<?php

use Illuminate\Database\Seeder;

class Social_coverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Social_cover::create([
            'image' => "hululu",
        ]);


        App\Models\Social_cover::create([
            'image' => "hululu",
        ]);
    }
}
