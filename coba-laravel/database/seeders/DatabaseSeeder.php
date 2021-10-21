<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

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

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Putra Hanif Ammarta',
        //     'email' => 'putrahanif437@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Hanifuu Ameuta',
        //     'email' => 'hanifuuameuta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero unde, at voluptates minus ipsum officiis beatae praesentium, non inventore error doloribus commodi quasi quis saepe velit voluptas exercitationem maxime fugit? Quas officiis porro magni adipisci culpa odit labore aliquid necessitatibus quidem nam ducimus commodi, quibusdam voluptates pariatur fuga aut iusto qui, omnis perspiciatis facilis atque optio. Corporis debitis recusandae quaerat nostrum repudiandae. Placeat ad adipisci explicabo provident veritatis! Quo sequi corrupti nemo unde quia earum dolorum dolore facere, iusto deleniti non ad totam sit adipisci commodi. Vel labore, reprehenderit quidem eos culpa nostrum sit aliquam, odit quas id quos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero unde, at voluptates minus ipsum officiis beatae praesentium, non inventore error doloribus commodi quasi quis saepe velit voluptas exercitationem maxime fugit? Quas officiis porro magni adipisci culpa odit labore aliquid necessitatibus quidem nam ducimus commodi, quibusdam voluptates pariatur fuga aut iusto qui, omnis perspiciatis facilis atque optio. Corporis debitis recusandae quaerat nostrum repudiandae. Placeat ad adipisci explicabo provident veritatis! Quo sequi corrupti nemo unde quia earum dolorum dolore facere, iusto deleniti non ad totam sit adipisci commodi. Vel labore, reprehenderit quidem eos culpa nostrum sit aliquam, odit quas id quos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero unde, at voluptates minus ipsum officiis beatae praesentium, non inventore error doloribus commodi quasi quis saepe velit voluptas exercitationem maxime fugit? Quas officiis porro magni adipisci culpa odit labore aliquid necessitatibus quidem nam ducimus commodi, quibusdam voluptates pariatur fuga aut iusto qui, omnis perspiciatis facilis atque optio. Corporis debitis recusandae quaerat nostrum repudiandae. Placeat ad adipisci explicabo provident veritatis! Quo sequi corrupti nemo unde quia earum dolorum dolore facere, iusto deleniti non ad totam sit adipisci commodi. Vel labore, reprehenderit quidem eos culpa nostrum sit aliquam, odit quas id quos.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero unde, at voluptates minus ipsum officiis beatae praesentium, non inventore error doloribus commodi quasi quis saepe velit voluptas exercitationem maxime fugit? Quas officiis porro magni adipisci culpa odit labore aliquid necessitatibus quidem nam ducimus commodi, quibusdam voluptates pariatur fuga aut iusto qui, omnis perspiciatis facilis atque optio. Corporis debitis recusandae quaerat nostrum repudiandae. Placeat ad adipisci explicabo provident veritatis! Quo sequi corrupti nemo unde quia earum dolorum dolore facere, iusto deleniti non ad totam sit adipisci commodi. Vel labore, reprehenderit quidem eos culpa nostrum sit aliquam, odit quas id quos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        
    }
}
