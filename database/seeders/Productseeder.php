<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'bleuet',
            'price'=>9,
            'description'=>'this hydrosol is made with debluet flowers, it is used in compresses on the eyes',
            'category'=>'hydrolat',
            'gallery'=>'img/beuet.jpg',
        ],
       
    
    );
    }
}
