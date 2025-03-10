<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for( $i = 0; $i < 20; $i++ ){
            Post::create([
                'title'=>fake()->firstName(),
                'body'=>fake()->paragraph(),
            ]);
        }
    }
}
