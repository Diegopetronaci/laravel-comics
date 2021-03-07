<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 5; $i++) {
            $newComic = new Comic();
            $newComic->titolo = $faker->words(3, true);
            $newComic->descrizione = $faker->text(300);
            $newComic->slug = Str::slug($newComic->titolo);
            $newComic->artista = $faker->name();
            $newComic->scrittore = $faker->name();
            $newComic->serie = $faker->words(4, true);
            $newComic->prezzo = $faker->randomFloat(2, 2, 99);
            $newComic->rilasciato_il = $faker->dateTime();
            $newComic->volume = $faker->RandomDigitNotNull();
            $newComic->save();
        }
    }
}
