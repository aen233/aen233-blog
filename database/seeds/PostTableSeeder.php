<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => 'Title ' . $i,
                'content' => 'Body ' . $i,
                'user_id' => 1,
            ]);
        }
    }
}

