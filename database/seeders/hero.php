<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class hero extends Seeder
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
            ['real_name' => 'Tree', 'hero_name' => 'Groot', 'element' => 'Wood', 'gender' => 'Male', 'power' => '90'],
            ['real_name' => 'Richard Kuklinski', 'hero_name' => 'Iceman', 'element' => 'Ice', 'gender' => 'Male', 'power' => '60'],
            ['real_name' => 'Arthur Curry', 'hero_name' => 'Aquaman', 'element' => 'Water', 'gender' => 'Male', 'power' => '100'],
            ['real_name' => 'Johnny Storm', 'hero_name' => 'Human Torch', 'element' => 'Fire', 'gender' => 'Male', 'power' => '85'],
            ['real_name' => 'Bary', 'hero_name' => 'Flash', 'element' => 'Lightning', 'gender' => 'Male', 'power' => '80'],
        ];
        DB::table('hero')->insert($data);

    }
}
