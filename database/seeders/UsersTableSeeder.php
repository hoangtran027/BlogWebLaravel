<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::created([
            'name' => 'Admin',
            'email' => 'admin@techschool.vn',
            'role' => 'admin',
            'password' => Hash::make('123123')
        ]);
        User::created([
            'name' => 'User',
            'email' => 'User@techschool.vn',
            'role' => 'user',
            'password' => Hash::make('123123')
        ]);

        Post::created([
            'categories_id' => 1,
            'user_id' => 1,
            'title' => 'Hom nay troi dep qua',
            'thumb' => 'Hom nay troi dep qua',
            'full_img' => 'https://hinhgaixinh.com/wp-content/uploads/2022/03/anh-gai-xinh-hoc-sinh-tuyet-dep.jpg'
        ]);

        Post::created([
            'categories_id' => 1,
            'user_id' => 1,
            'title' => 'Hom nay troi Khong dep',
            'thumb' => 'Hom nay troi Khong Dep',
            'full_img' => 'https://astral.vn/wp-content/uploads/2023/05/anh-gai-xinh-lo-clip-169.jpg'
        ]);


        Post::created([
            'id' => 1,
            'title' => 'Girl',
            'detail' => 'Girl',
            'image' => 'img thiu ne.png'
        ]);

        // DB::table('comments')->insert([
        //     'user_id' => '1',
        //     'post_id' => '1',
        //     'comment' => 'anh xau qua',
        // ]);

        // DB::table('categries')->insert([
        //     'title' => 'xa hoi',
        //     'detail' => 'xa hoi',
        //     'image' => 'asdasdas.png',
        // ]);

    }
}
