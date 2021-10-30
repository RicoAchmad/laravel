<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class barang extends Seeder
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
            ['nama' => 'Tas' , 'varian' => 'Warna' , 'harga_beli' => '35000' , 'harga_jual' => '50000'],
            ['nama' => 'Sepatu' , 'varian' => 'Size' , 'harga_beli' => '55000' , 'harga_jual' => '90000'],
            ['nama' => 'Buku' , 'varian' => 'Size' , 'harga_beli' => '5000' , 'harga_jual' => '10000'],
            ['nama' => 'Baju' , 'varian' => 'Size' , 'harga_beli' => '77500' , 'harga_jual' => '100000'],
            ['nama' => 'Celana' , 'varian' => 'Warna' , 'harga_beli' => '55000' , 'harga_jual' => '70000']
        ];
        DB::table('barang')->insert($data);
    }
}
