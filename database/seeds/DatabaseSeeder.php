<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\Eleccion::class, 100)->create();
        factory(App\Models\Comite::class, 30)->create();
        factory(App\Models\Persona::class, 100)->create();
        /*$this->call(EleccionSeeder::class);
        $this->call(ComiteSeeder::class);
        $this->call(PersonaSeeder::class);*/
        
    }
}
