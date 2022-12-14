<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Adi',
            'username' => 'adi',
            'email' => 'adi@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::factory(5)->create();
        Category::create([
            'name'=>'Teknologi',
            'slug'=>'teknologi'
        ]);
        Category::create([
            'name'=>'Informasi',
            'slug'=>'informasi'
        ]);
        Category::create([
            'name'=>'Komunikasi',
            'slug'=>'komunikasi'
        ]);
        Post::factory(20)->create();
        // User::create([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password')
        // ]);
       

        // $post = Str::random(100);
        // Post::create([
        //     'title'=>ucwords(substr($post,-15)),
        //     'slug'=>strtolower(substr($post,-15)),
        //     'excerpt'=>substr($post,-25),
        //     'body'=>$post,
        //     'category_id'=> 1,
        //     'user_id'=>1
            
        // ]);

    }
}
