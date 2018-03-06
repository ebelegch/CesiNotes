<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Filiere;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('filieres')->insert([
	            'libelleFilliere' => $faker->sentence,
	        ]);
        }
    }
}
