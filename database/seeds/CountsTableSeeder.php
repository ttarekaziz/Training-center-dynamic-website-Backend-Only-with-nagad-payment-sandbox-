<?php

use Illuminate\Database\Seeder;

class CountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Count::create([
            'batches' => 1,
            'students' => 1,
            'mentors' => 1,
            's_students' => 1,

        
        
            ]);
    }
}
