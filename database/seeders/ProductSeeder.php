<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
 
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
           [
            'name'=>'Tee-shirt',
            'price'=>'4500',
            'description'=>'A good tee-shirt',
            'Category'=>'Tv',
            'gallery'=>'https://icons.iconarchive.com/icons/nendomatt/apple-louvre/512/Apple-Store-Tshirt-Red-icon.png'   
           ],
           [
            'name'=>'LG Frige',
            'price'=>'14000',
            'description'=>'A smart frige with 4gb Ram and much more featyre',
            'Category'=>'Frige',
            'gallery'=>'https://www.istockphoto.com/photo/refrigerator-gm136857649-12772086'   
           ]
    );
    }
}
