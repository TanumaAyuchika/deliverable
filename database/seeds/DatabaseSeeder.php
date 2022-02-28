<?php

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
        $this->call(ReviewsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
