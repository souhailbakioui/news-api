<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // \App\Models\News::factory(5)->create();
        $news = [
            [
                'titre' => "Actualités politiques",
                'content' => "Les dernières actualités politiques du pays.",
                'category_id' => 1,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Nouvelles économiques",
                'content' => "Les dernières nouvelles économiques mondiales.",
                'category_id' => 2,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités sportives",
                'content' => "Les dernières actualités sportives et les résultats des matchs.",
                'category_id' => 3,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités du divertissement",
                'content' => "Les dernières actualités du monde du divertissement.",
                'category_id' => 4,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités du cinéma",
                'content' => "Les dernières nouvelles du monde du cinéma et du septième art.",
                'category_id' => 5,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités musicales",
                'content' => "Les dernières actualités musicales, concerts, et artistes en vogue.",
                'category_id' => 6,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Sorties et événements",
                'content' => "Découvrez les prochaines sorties et événements à ne pas manquer.",
                'category_id' => 7,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités technologiques",
                'content' => "Les dernières actualités du monde de la technologie et de l'informatique.",
                'category_id' => 8,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités informatiques",
                'content' => "Restez à jour avec les dernières nouvelles informatiques, logiciels et innovations.",
                'category_id' => 9,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités de gadgets",
                'content' => "Découvrez les dernières informations sur les smartphones, tablettes et jeux vidéo.",
                'category_id' => 10,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Actualités de médecine",
                'content' => "Les dernières avancées médicales et découvertes en médecine.",
                'category_id' => 11,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ],
            [
                'titre' => "Conseils bien-être",
                'content' => "Des conseils pour améliorer votre bien-être et votre qualité de vie.",
                'category_id' => 12,
                'date_debut' => $faker->dateTimeBetween('-2 year', 'now'),
                'date_expiration' => $faker->dateTimeBetween('now', '+1 year'),
            ]
        ];
        News::insert($news);
    }
}
