<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class pesanan extends Seeder
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
            ['nama_pelanggan' => 'Rico' , 'nama_barang' => 'Tas' , 'qty' => '3' , 'tgl_pesan' => '2021-11-12'],
            ['nama_pelanggan' => 'Rizky' , 'nama_barang' => 'Baju' , 'qty' => '1' , 'tgl_pesan' => '2021-09-11'],
            ['nama_pelanggan' => 'Ruslan' , 'nama_barang' => 'Celana' , 'qty' => '2' , 'tgl_pesan' => '2021-05-07'],
            ['nama_pelanggan' => 'Sultan' , 'nama_barang' => 'Buku' , 'qty' => '3' , 'tgl_pesan' => '2021-06-04'],
            ['nama_pelanggan' => 'Rio' , 'nama_barang' => 'Sepatu' , 'qty' => '1' , 'tgl_pesan' => '2021-12-12']
        ];
        DB::table('pesanan')->insert($data);
    }
}
