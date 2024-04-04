<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\post_data;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        // User::create([

        //     'name' => 'virgelius hendrawan taralandu',
        //     'username' => 'virgeliushendrawan',
        //     'email' => 'taralanduhendra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([

        //     'name' => 'Dony Taralandu',
        //     'email' => 'taralandudony@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(7)->create();


        Category::create([
            'name' => 'web programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'game design',
            'slug' => 'game-design'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);



        post_data::factory(20)->create();


        // post_data::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since the 1500s, 
        //     when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
        //     essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
        //     Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
        //     versions of Lorem Ipsum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // post_data::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since the 1500s, 
        //     when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
        //     essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
        //     Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
        //     versions of Lorem Ipsum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // post_data::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
        //     been the industrys standard dummy text ever since the 1500s, 
        //     when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        //     It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
        //     essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
        //     Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
        //     versions of Lorem Ipsum',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
