<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Archive;


class ArchivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $archive = new Archive();

            $archive->title = $faker->text("20");
            $archive->price = $faker->numberBetween(10, 100);
            $archive->thumb = $faker->text("100");
            $archive->description = $faker->text("200");

            $archive->save();




        } 
    }
}
