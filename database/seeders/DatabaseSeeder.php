<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        User::factory(3)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Faris Teguh Pambudi',
        //     'email' => 'faris@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Priambodo Adi',
        //     'email' => 'priambodo@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create(
            [
                'name' => 'Web Design',
                'slug' => 'web-design'
            ]
        );

        Category::create(
            [
                'name' => 'Programming',
                'slug' => 'programming'
            ]
        );

        // Post::create(
        //     [
        //         'title' => 'Judul Pertama',
        //         'category_id' => 1,
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor ke pertama',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aperiam corporis ad perspiciatis excepturi cumque, perferendis eligendi esse ut dolores quod inventore dolor distinctio impedit quas eaque officiis doloribus animi mollitia nostrum ratione consequuntur cupiditate! Laborum, quibusdam. Minus, esse. Ea, reprehenderit vitae? A, atque, autem excepturi, corrupti aspernatur maxime itaque sapiente amet dicta at ipsam obcaecati eius suscipit. Sequi similique inventore, sed quo tenetur maxime cumque, omnis, culpa in libero reiciendis tempora quasi dicta ratione tempore assumenda odio ex? Voluptatibus, labore? Fugiat maxime nobis dolore non soluta magnam officia quam distinctio, commodi saepe sunt dicta omnis beatae quod ratione, et dignissimos repudiandae nemo reiciendis quo itaque tempora consequatur? Nulla ipsam voluptatibus placeat sequi! Suscipit nobis maiores illo, voluptate doloribus deleniti.',
        //         'user_id' => 1
        //     ]
        // );

        // Post::create(
        //     [
        //         'title' => 'Judul Kedua',
        //         'category_id' => 1,
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor ke kedua',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aperiam corporis ad perspiciatis excepturi cumque, perferendis eligendi esse ut dolores quod inventore dolor distinctio impedit quas eaque officiis doloribus animi mollitia nostrum ratione consequuntur cupiditate! Laborum, quibusdam. Minus, esse. Ea, reprehenderit vitae? A, atque, autem excepturi, corrupti aspernatur maxime itaque sapiente amet dicta at ipsam obcaecati eius suscipit. Sequi similique inventore, sed quo tenetur maxime cumque, omnis, culpa in libero reiciendis tempora quasi dicta ratione tempore assumenda odio ex? Voluptatibus, labore? Fugiat maxime nobis dolore non soluta magnam officia quam distinctio, commodi saepe sunt dicta omnis beatae quod ratione, et dignissimos repudiandae nemo reiciendis quo itaque tempora consequatur? Nulla ipsam voluptatibus placeat sequi! Suscipit nobis maiores illo, voluptate doloribus deleniti.',
        //         'user_id' => 1
        //     ]
        // );


        // Post::create(
        //     [
        //         'title' => 'Judul Ke Empat',
        //         'category_id' => 2,
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'Lorem ipsum dolor ke empat',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aperiam corporis ad perspiciatis excepturi cumque, perferendis eligendi esse ut dolores quod inventore dolor distinctio impedit quas eaque officiis doloribus animi mollitia nostrum ratione consequuntur cupiditate! Laborum, quibusdam. Minus, esse. Ea, reprehenderit vitae? A, atque, autem excepturi, corrupti aspernatur maxime itaque sapiente amet dicta at ipsam obcaecati eius suscipit. Sequi similique inventore, sed quo tenetur maxime cumque, omnis, culpa in libero reiciendis tempora quasi dicta ratione tempore assumenda odio ex? Voluptatibus, labore? Fugiat maxime nobis dolore non soluta magnam officia quam distinctio, commodi saepe sunt dicta omnis beatae quod ratione, et dignissimos repudiandae nemo reiciendis quo itaque tempora consequatur? Nulla ipsam voluptatibus placeat sequi! Suscipit nobis maiores illo, voluptate doloribus deleniti.',
        //         'user_id' => 2
        //     ]
        // );
    }
}
