<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'id' => 1,
                'title' => 'Blog Administration 101',
                'content' => 'Be responsible and stuff.',
                'user_id' => 1,
            ]
        );

        DB::table('articles')->insert(
            [
                'id' => 2,
                'title' => 'The Joy of Writing',
                'content' => 'I sure do like writing in blogs!',
                'user_id' => 2
            ]
        );
    }
}
