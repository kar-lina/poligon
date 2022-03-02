<?php

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BlogPost::class, 50)->create();
    }
}
