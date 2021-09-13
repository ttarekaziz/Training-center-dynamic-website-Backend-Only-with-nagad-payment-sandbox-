<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Contact::create([
            'phone' => "+330-328-5065",
            'email' => "info@example.com",
            'address' => "4411 Wildwood Street"
        ]);
    }
}
