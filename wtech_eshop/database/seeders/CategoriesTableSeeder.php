<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now()->toDateTimeString();

                Category::insert([
                    ['name' => 'Počítače', 'created_at' => $now, 'updated_at' => $now],
                    ['name' => 'Notebooky', 'created_at' => $now, 'updated_at' => $now],
                    ['name' => 'Príslušenstvo', 'created_at' => $now, 'updated_at' => $now],
                ]);
    }
}
