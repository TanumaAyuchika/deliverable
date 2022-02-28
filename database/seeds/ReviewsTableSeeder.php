<?php

use Illuminate\Database\Seeder;



class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //   DB::table('reviews')->insert([
    //         'id'=>1,
    //         'title'=>'title1',
    //         'body'=>'This is body',
    //         'amount'=>4.2,
           
    //     ]);
        factory(App\Review::class, 3)->create();
        
        
    }
}
