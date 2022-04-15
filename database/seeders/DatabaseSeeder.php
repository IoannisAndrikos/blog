<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = User::factory()->create([
            'name' => 'administrator',
            'username' => 'administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin1234')
        ]);

        $user_2 = User::factory()->create([
            'name' => 'becky',
            'username' => 'becky',
            'email' => 'becky@example.com',
            'password' => bcrypt('becky1234')
        ]);

        $category_1 = Category::factory()->create([
            'name' => 'work'
        ]);

        $category_2 = Category::factory()->create([
            'name' => 'hobbies'
        ]);

        $category_3 = Category::factory()->create([
            'name' => 'family'
        ]);

        // Post::factory(10)->create([
        //     'user_id' => $user_1->id,
        //     'category_id' => $category_1->id
        // ]);

        // Post::factory(10)->create([
        //     'user_id' => $user_1->id,
        //     'category_id' => $category_2->id
        // ]);

        // Post::factory(10)->create([
        //     'user_id' => $user_1->id,
        //     'category_id' => $category_3->id
        // ]);

        // $posts_1 = Post::factory(10)->create([
        //     'user_id' => $user_2->id,
        //     'category_id' => $category_1->id
        // ]);

        // $posts_2 = Post::factory(10)->create([
        //     'user_id' => $user_2->id,
        //     'category_id' => $category_2->id
        // ]);

        // $posts_3 = Post::factory(10)->create([
        //     'user_id' => $user_2->id,
        //     'category_id' => $category_3->id
        // ]);


        // foreach($posts_1 as $post_1){
        //     Comment::factory(5)->create(['post_id' => $post_1->id ]);
        // }

        // foreach($posts_2 as $post_2){
        //     Comment::factory(5)->create(['post_id' => $post_2->id ]);
        // }

        // foreach($posts_3 as $post_3){
        //     Comment::factory(5)->create(['post_id' => $post_3->id ]);
        // }


    }
}
