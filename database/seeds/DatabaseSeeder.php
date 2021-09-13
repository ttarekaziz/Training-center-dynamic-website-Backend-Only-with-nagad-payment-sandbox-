<?php

use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(WelcomesTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(Why_usesTableSeeder::class);
        $this->call(CountsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(Social_coverTableSeeder::class);
    }
}
