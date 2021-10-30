<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class postsSeeder extends Seeder
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
            ['title' => 'Karina Over Power' , 'content' => 'lorem ipsum'],
            ['title' => 'Belajar Laravel Sampai Jago' , 'content' => 'lorem ipsum'],
            ['title' => '5 Langkah tidak menjadi beban keluarga' , 'content' => 'lorem ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}
