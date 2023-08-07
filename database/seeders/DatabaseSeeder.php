<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Jemaat;
use App\Models\Gallery;
use App\Models\Jabatan;
use App\Models\Category;
use App\Models\Renungan;
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

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('abc123456')
        ]);

        Post::factory(30)->create();

        Jemaat::factory(50)->create();

        Gallery::factory(20)->create();

        Renungan::factory(20)->create();

        Jabatan::create([
            'name' => 'Pendeta',
        ]);
        Jabatan::create([
            'name' => 'Penetua',
        ]);
        Jabatan::create([
            'name' => 'Majelis',
        ]);
        Jabatan::create([
            'name' => 'Pemusik/Jemaat',
        ]);
        Jabatan::create([
            'name' => 'Singer/Jemaat',
        ]);
        Jabatan::create([
            'name' => 'Jemaat',
        ]);
        
        Category::create([
            'name' => 'Christmas News',
            'slug' => 'chirstmas-news',
        ]);
        Category::create([
            'name' => 'Easter News',
            'slug' => 'easter-news',
        ]);
        Category::create([
            'name' => 'Eucharist News',
            'slug' => 'eucharist-news',
        ]);
        Category::create([
            'name' => 'Baptism News',
            'slug' => 'baptism-news',
        ]);
        Category::create([
            'name' => 'Happy News',
            'slug' => 'happy-news',
        ]);
        Category::create([
            'name' => 'Bad News',
            'slug' => 'bad-news',
        ]);
    }
}
