<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class pembelian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_barang' => 'Tas' , 'nama_suplier' => 'Dedi' , 'qty' => '30' , 'tgl' => '2021-10-11'],
            ['nama_barang' => 'Baju' , 'nama_suplier' => 'Azhar' , 'qty' => '100' , 'tgl' => '2021-08-12'],
            ['nama_barang' => 'Buku' , 'nama_suplier' => 'Dadang' , 'qty' => '20' , 'tgl' => '2021-04-09'],
            ['nama_barang' => 'Sepatu' , 'nama_suplier' => 'Boruto' , 'qty' => '30' , 'tgl' => '2021-05-03'],
            ['nama_barang' => 'Celana' , 'nama_suplier' => 'Lord' , 'qty' => '100' , 'tgl' => '2021-11-05']
        ];
        DB::table('pembelian')->insert($data);
    }
}
