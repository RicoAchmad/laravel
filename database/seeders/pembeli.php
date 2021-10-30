<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembeli extends Seeder
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
            ['nama' => 'Rico' , 'jenis_kelamin' => 'Laki-laki' , 'alamat' => 'Jl. Kopo' , 'kode_pos' => '111' , 'kota' => 'Bandung' , 'tgl_lahir' => '2004-05-03'],
            ['nama' => 'Rio' , 'jenis_kelamin' => 'Laki-laki' , 'alamat' => 'Jl. Permata' , 'kode_pos' => '333' , 'kota' => 'Jakarta' , 'tgl_lahir' => '2003-03-01'],
            ['nama' => 'Ruslan' , 'jenis_kelamin' => 'Laki-laki' , 'alamat' => 'Jl. Sayati' , 'kode_pos' => '321' , 'kota' => 'Bali' , 'tgl_lahir' => '2002-01-01'],
            ['nama' => 'Rizky' , 'jenis_kelamin' => 'Laki-laki' , 'alamat' => 'Jl. Cibedug' , 'kode_pos' => '123' , 'kota' => 'Bandung' , 'tgl_lahir' => '2004-06-03'],
            ['nama' => 'Sultan' , 'jenis_kelamin' => 'Laki-laki' , 'alamat' => 'Jl. Sekeawi' , 'kode_pos' => '555' , 'kota' => 'Aceh' , 'tgl_lahir' => '2003-04-08']
        ];
        DB::table('pembeli')->insert($data);
    }
}
