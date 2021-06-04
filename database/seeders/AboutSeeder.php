<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'titre' => 'Voluptatem dignissimos provident quasi corporis ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

            ',
            'paragraphe1' => '  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
            ',
            'paragraphe2' => '  Duis aute irure dolor in reprehenderit in voluptate velit.
            ',
            'paragraphe3' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.
            ',
            'image' => 'about.jpg',
        ]);
    }
}
