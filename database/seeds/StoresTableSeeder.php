<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'id' => 1,
            'name' => '△△店',
            'address' => '〇〇県✕✕市',
            
            
        ]);
            
    }
}
