<?php

namespace Database\Seeders;

use App\Models\posts\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->title = 'Primer Post';
        $post->content = 'Contenido del primero post creado';
        $post->category = 'Social Post';

        $post->save();

        $post = new Post();

        $post->title = 'Segundo Post';
        $post->content = 'Contenido del segundo post creado';
        $post->category = 'Informative Post';

       $post->save();
    }
}
