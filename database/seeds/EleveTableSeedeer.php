<?php

use Illuminate\Database\Seeder;
//use fzaninotto\faker;
use Faker\Factory as Faker;

use App\Eleve;

class ElevesTableSeedeer extends Seeder
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
	        DB::table('eleves')->insert([
	            'eleveNom' => $faker->name,
	            'elevePrenom' => $faker->name,
                'eleveEmail' => $faker->email,
                'eleveMotDePasse' => bcrypt('secret'),
	        ]);
        }
    }
}
