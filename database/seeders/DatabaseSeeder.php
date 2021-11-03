<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        //$this->call(PostsSeeder::class);
        //$this->call(barang::class);
        //$this->call(pesanan::class);
        //$this->call(pembelian::class);
        //$this->call(suplier::class);
        //$this->call(pembeli::class);
        $this->call(hero::class);

    }
}
