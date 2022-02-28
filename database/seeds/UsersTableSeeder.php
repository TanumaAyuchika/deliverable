<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => '田中太郎',
            'email' => 'taro_sample@mail.com',
            'password' => bcrypt('test1234'),
            
        ]);

    }
} 