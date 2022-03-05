<?php

use Illuminate\Database\Seeder;

class gh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        $posts = [
            [
                'id' => 1,
                'title' => 'Lập trình PHP',
                'slug' => str_slug('Lập trình PHP'),
                'content' => '....',
                'category_id' => rand(2,3),
            ],
            [
                'id' => 2,
                'title' => 'giachoi',
                'slug' => str_slug('Lập trình Ruby'),
                'content' => '....',
                'category_id' => rand(1,3),
            ]
        ];

        try {
            foreach ($posts as $post) {
                Post::create($post);
            }
        } catch (\Throwable $th) {

        }
    }