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
            $archive->title = $faker->text("50");
            $archive->description = $faker->text("100");
            $archive->price = $faker->numberBetween(10, 100);
            $archive->series = $faker->text("100");
        
            $archive->save();

        } 
    }
}
