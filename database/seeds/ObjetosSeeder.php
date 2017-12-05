<?php

use Illuminate\Database\Seeder;

class ObjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        for ($i=0;$i<50;$i++){
            $objeto = new \App\Objeto();
            $objeto->nombre = $faker->domainWord;
            $objeto->cantidad = $faker->numberBetween(0,100000);
            $objeto->save();
        }

    }
}
