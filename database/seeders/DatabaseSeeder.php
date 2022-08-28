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
        User::create([
            'name' => 'Salsabila Qurrotul Aini',
            'username' => 'saqura',
            'email' => 'salsabilaft@gmail.com',
            'password' => bcrypt('password')
        ]);
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
        //     'name' => 'Salsabila Qurrotul Aini',
        //     'email' => 'salsabilaft@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus sed totam sapiente, blanditiis officia. Harum, autem quaerat. Perferendis, nam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium laborum blanditiis similique necessitatibus quas. Eos laborum, provident temporibus possimus voluptate architecto voluptatibus, autem accusantium tempora sint esse ipsa vel cupiditate aut cum expedita nam repellat! In, totam? Hic rem necessitatibus quisquam dolore magni ut debitis impedit ad quidem, perferendis nesciunt aliquam quis possimus nobis tempore quo corrupti aspernatur, laudantium accusantium aliquid saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ducimus voluptas maxime quisquam magnam, nihil pariatur esse a facere veniam dolor repellendus necessitatibus sit? Rerum, facilis. Beatae excepturi quae blanditiis, perspiciatis autem illum incidunt nulla eum! Laboriosam neque sunt, voluptas perferendis quo illum qui exercitationem, deserunt officia, sequi iusto minus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
