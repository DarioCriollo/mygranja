<?php

use Illuminate\Database\Seeder;
use App\TipoAnimal;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tipo= new TipoAnimal;
        $tipo->nombre='Carnivoros';
        $tipo->detalle='Animales de alta peligrosidad';
        $tipo->save();

        $tipo= new TipoAnimal;
        $tipo->nombre='Mamiferos';
        $tipo->detalle='Animales dosiles';
        $tipo->save();
    }
}
