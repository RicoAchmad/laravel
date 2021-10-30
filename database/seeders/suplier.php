<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class suplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama' => 'Dedi' , 'alamat' => 'jl. Moh. toha' , 'kode_pos' => '123' , 'kota' => 'Bandung'],
            ['nama' => 'Dadang' , 'alamat' => 'Jl. Kopo' , 'kode_pos' => '456' , 'kota' => 'Bandung'],
            ['nama' => 'Boruto' , 'alamat' => 'Jl. Konoha' , 'kode_pos' => '789' , 'kota' => 'Jakarta'],
            ['nama' => 'Azhar' , 'alamat' => 'Jl. Cibedug' , 'kode_pos' => '321' , 'kota' => 'Bandung'],
            ['nama' => 'Lord' , 'alamat' => 'Jl. Land of dawn' , 'kode_pos' => '987' , 'kota' => 'Yogya']
        ];
        DB::table('suplier')->insert($data);
    }
}
