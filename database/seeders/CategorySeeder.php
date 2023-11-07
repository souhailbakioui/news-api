<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Root categories
        $actualites = Category::create(['name' => 'Actualités']);
        $divertissement = Category::create(['name' => 'Divertissement']);
        $technologie = Category::create(['name' => 'Technologie']);
        $sante = Category::create(['name' => 'Santé']);

        // Subcategories of Actualités
        $politique = $actualites->children()->create(['name' => 'Politique']);
        $economie = $actualites->children()->create(['name' => 'Économie']);
        $sport = $actualites->children()->create(['name' => 'Sport']);

        // Subcategories of Divertissement
        $cinema = $divertissement->children()->create(['name' => 'Cinéma']);
        $musique = $divertissement->children()->create(['name' => 'Musique']);
        $sorties = $divertissement->children()->create(['name' => 'Sorties']);

        // Subcategories of Technologie
        $informatique = $technologie->children()->create(['name' => 'Informatique']);
        $gadgets = $technologie->children()->create(['name' => 'Gadgets']);

        // Subcategories of Informatique
        $ordinateurs_de_bureau = $informatique->children()->create(['name' => 'Ordinateurs de bureau']);
        $pc_portable = $informatique->children()->create(['name' => 'PC portable']);
        $connexion_internet = $informatique->children()->create(['name' => 'Connexion internet']);

        // Subcategories of Gadgets
        $smartphones = $gadgets->children()->create(['name' => 'Smartphones']);
        $tablettes = $gadgets->children()->create(['name' => 'Tablettes']);
        $jeux_video = $gadgets->children()->create(['name' => 'Jeux vidéo']);

        // Subcategories of Santé
        $medecine = $sante->children()->create(['name' => 'Médecine']);
        $bien_etre = $sante->children()->create(['name' => 'Bien-être']);

    }
}
