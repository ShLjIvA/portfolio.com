<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $item) {
            \DB::table('posts')->insert([
                'title' => "Title $item",
                'body' => "Body $item",
                'image' => "image$item"
            ]);

        }
    }
}
