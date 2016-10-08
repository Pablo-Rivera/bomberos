<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BomberoTableSeeder::class);
        $this->call(TipoServicioTableSeeder::class);
        $this->call(VehiculoTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
    }
}
