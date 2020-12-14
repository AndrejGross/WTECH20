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
         for ($i=1; $i <= 8; $i++) {
             Product::create([
                 'name' => 'Notebook '.$i,
                 'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                 'price' => rand(549, 2499),
                'type' => 'herne',
                'brand' => 'Razer',
                 'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp-spacegray-select-202011?wid=892&hei=820&&qlt=80&.v=1603406905000',
                 'category_id' => 2,
             ]);
         }

         for ($i=9; $i <= 16; $i++) {
              Product::create([
                  'name' => 'Notebook '.$i,
                  'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                  'price' => rand(549, 2499),
                 'type' => 'kancelarske',
                 'brand' => 'Asus',
                  'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                  'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp-spacegray-select-202011?wid=892&hei=820&&qlt=80&.v=1603406905000',
                  'category_id' => 2,
              ]);
          }

         for ($i=1; $i <= 8; $i++) {
              Product::create([
                  'name' => 'Počítač '.$i,
                  'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                  'price' => rand(549, 2499),
                  'type' => 'herne',
                  'brand' => 'Razer',
                  'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                  'image' => 'https://www.mall.cz/i/39176092/550/550',
                  'category_id' => 1,
              ]);
         }

         for ($i=9; $i <= 16; $i++) {
               Product::create([
                   'name' => 'Počítač '.$i,
                   'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                   'price' => rand(549, 2499),
                   'type' => 'kancelarske',
                   'brand' => 'Asus',
                   'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                   'image' => 'https://www.mall.cz/i/39176092/550/550',
                   'category_id' => 1,
               ]);
          }

         for ($i=1; $i <= 8; $i++) {
               Product::create([
                   'name' => 'Príslušenstvo '.$i,
                   'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                   'price' => rand(549, 2499),
                   'type' => 'herne',
                   'brand' => 'Razer',
                   'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                   'image' => 'https://www.mzone.sk/images/products/airpods-5-gallery.jpg',
                   'category_id' => 3,
               ]);
         }

         for ($i=9; $i <= 16; $i++) {
                Product::create([
                    'name' => 'Príslušenstvo '.$i,
                    'details' => ' inch: 15,  TB SSD 512GB, 32GB RAM',
                    'price' => rand(549, 2499),
                    'type' => 'kancelarske',
                    'brand' => 'Asus',
                    'description' => 'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                    'image' => 'https://www.mzone.sk/images/products/airpods-5-gallery.jpg',
                    'category_id' => 3,
                ]);
          }

     }
}
