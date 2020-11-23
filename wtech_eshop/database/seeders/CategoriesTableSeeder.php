<?php

namespace Database\Seeders;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
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
