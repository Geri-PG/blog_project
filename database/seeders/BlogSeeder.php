<?php

namespace Database\Seeders;

use App\Models\Posts;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Posts::create([
                'title' => $faker->sentence,
                'short_description' => $faker->sentence,
                'user_id' => 1,
                'content' => $faker->paragraphs(6, true),
                'published_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'slug' => 'name',
            ]);
        }
    }
}
