<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{    /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
         // Laptops
         for ($i=1; $i <= 16; $i++) {
             Product::create([
<<<<<<< HEAD
                 'name' => 'Flashlight '.$i,
                 'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                 'price' => rand(549, 2499),
                 'type' => 'kancelarske',
                 'brand' => 'Razer',
                 'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'image' => 'https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png',
                 'category_id' => rand(1, 3),
             ]);
=======
                 'name' => 'Laptop '.$i,
                 'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                 'price' => rand(549, 2499),
                 'type' => 'herne',
                 'brand' => 'Apple',
                 'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'image' => 'https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png',
             ])->categories()->attach(1);
>>>>>>> 561c475c3fff89721213e20f18eb3ea17a750ddf
         }
     }
}
