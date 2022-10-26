<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // User::create([
        //   'name' => 'Ayu Putri Dwi Annisa',
        // 'email' => 'ayuupuutri@gmail.com',
        //'password' => bcrypt('12345678')
        //]);

        //User::create([
        //  'name' => 'Agam Ramdhan Kamil Atmaja',
        //'email' => 'agamramdhan@gmail.com',
        //'password' => bcrypt('12345678')
        //]);

        User::factory(10)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, ullam? Repellat, illum aliquam. Atque porro explicabo deleniti, rem soluta neque provident alias veniam amet odit expedita ad sequi in debitis ea accusamus veritatis eveniet magnam. Nesciunt vero modi, voluptatibus quis error, enim corrupti, corporis dolorem laudantium non voluptates. Itaque nam adipisci accusamus placeat modi odio repellat rerum harum ipsam, delectus, fuga et consequuntur aliquam rem ullam inventore blanditiis iure deleniti, natus tenetur ex? Vitae officia fugiat, voluptate dolorem unde eaque, molestiae suscipit nemo voluptates optio, voluptatem sed. Commodi ipsa esse beatae tempore modi, autem quisquam cupiditate voluptates doloremque accusamus molestias?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, ullam? Repellat, illum aliquam. Atque porro explicabo deleniti, rem soluta neque provident alias veniam amet odit expedita ad sequi in debitis ea accusamus veritatis eveniet magnam. Nesciunt vero modi, voluptatibus quis error, enim corrupti, corporis dolorem laudantium non voluptates. Itaque nam adipisci accusamus placeat modi odio repellat rerum harum ipsam, delectus, fuga et consequuntur aliquam rem ullam inventore blanditiis iure deleniti, natus tenetur ex? Vitae officia fugiat, voluptate dolorem unde eaque, molestiae suscipit nemo voluptates optio, voluptatem sed. Commodi ipsa esse beatae tempore modi, autem quisquam cupiditate voluptates doloremque accusamus molestias?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-Tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, ullam? Repellat, illum aliquam. Atque porro explicabo deleniti, rem soluta neque provident alias veniam amet odit expedita ad sequi in debitis ea accusamus veritatis eveniet magnam. Nesciunt vero modi, voluptatibus quis error, enim corrupti, corporis dolorem laudantium non voluptates. Itaque nam adipisci accusamus placeat modi odio repellat rerum harum ipsam, delectus, fuga et consequuntur aliquam rem ullam inventore blanditiis iure deleniti, natus tenetur ex? Vitae officia fugiat, voluptate dolorem unde eaque, molestiae suscipit nemo voluptates optio, voluptatem sed. Commodi ipsa esse beatae tempore modi, autem quisquam cupiditate voluptates doloremque accusamus molestias?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, ullam? Repellat, illum aliquam. Atque porro explicabo deleniti, rem soluta neque provident alias veniam amet odit expedita ad sequi in debitis ea accusamus veritatis eveniet magnam. Nesciunt vero modi, voluptatibus quis error, enim corrupti, corporis dolorem laudantium non voluptates. Itaque nam adipisci accusamus placeat modi odio repellat rerum harum ipsam, delectus, fuga et consequuntur aliquam rem ullam inventore blanditiis iure deleniti, natus tenetur ex? Vitae officia fugiat, voluptate dolorem unde eaque, molestiae suscipit nemo voluptates optio, voluptatem sed. Commodi ipsa esse beatae tempore modi, autem quisquam cupiditate voluptates doloremque accusamus molestias?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
