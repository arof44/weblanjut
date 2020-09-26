<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Article::class, 5)->create();;
        $faker = Faker::create();
        foreach (range(0,10) as $i) {
        	DB::table('articles')->insert ([
        		//'id' =>$faker->number,
        		'title' $faker->text(2000),
        		'content' $faker->text(2000),
        		'imageurl' $faker->imageurl($widlh=640,$height=480),
        	]);
        }
    }
}
