<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        User::factory(2)->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis hic corrupti necessitatibus, alias beatae perspiciatis quibusdam iure distinctio quis nisi et dolor, itaque, expedita minus consectetur a. Consectetur eos delectus enim aliquam animi aut incidunt laboriosam non excepturi repudiandae esse, commodi, eligendi quibusdam quos accusamus cupiditate illum iusto optio?',
            'category_id' => $family->id,
            'user_id' => User::find(1)->id
        ]);

        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis hic corrupti necessitatibus, alias beatae perspiciatis quibusdam iure distinctio quis nisi et dolor, itaque, expedita minus consectetur a. Consectetur eos delectus enim aliquam animi aut incidunt laboriosam non excepturi repudiandae esse, commodi, eligendi quibusdam quos accusamus cupiditate illum iusto optio?',
            'category_id' => $personal->id,
            'user_id' => User::find(2)->id
        ]);

        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis hic corrupti necessitatibus, alias beatae perspiciatis quibusdam iure distinctio quis nisi et dolor, itaque, expedita minus consectetur a. Consectetur eos delectus enim aliquam animi aut incidunt laboriosam non excepturi repudiandae esse, commodi, eligendi quibusdam quos accusamus cupiditate illum iusto optio?',
            'category_id' => $work->id,
            'user_id' => User::find(2)->id
        ]);
    }
}
