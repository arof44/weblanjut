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
        //factory(App\Article::class, 5)->create();
        $this->call(UserTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
}
