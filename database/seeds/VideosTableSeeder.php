<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Video::create([
            'url' => "https://www.youtube.com/embed/0XE3FiDJbrk",
        ]);


        App\Models\Video::create([
            'url' => "https://www.youtube.com/embed/khDn_kFXBec",
        ]);
    }
}
