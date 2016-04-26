<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\News::create([
            'title'       => 'Title 1',
            'body'        => 'Body msg 1',
            'category_id' => 1,
        ]);

        \App\News::create([
            'title' => 'Title 2',
            'body'  => 'Body msg 2',
            'category_id' => 2,
        ]);
    }
}
