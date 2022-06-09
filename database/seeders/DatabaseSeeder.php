<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Post::truncate();
        Category::truncate();


         $user = User::factory()->create();

         $personal = Category::create([
             'name' =>'Personal',
             'slug' => 'personal'
         ]);
         $family =Category::create([
            'name' =>'Family',
            'slug' => 'family'
        ]);
        $work =Category::create([
            'name' =>'Work',
            'slug' => 'work'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Loream ipsum dolat sitr amet.</p>',
            'body' =>'<p>Loream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr
             ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr amet</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Loream ipsum dolat sitr amet.</p>',
            'body' =>'<p>Loream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr
            ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr ametLoream ipsum dolat sitr amet</p>'
        ]);


    }
}
