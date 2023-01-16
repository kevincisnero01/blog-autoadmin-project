<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::truncate();

        $csvFile = fopen(base_path("database/data/category.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Category::create([
                    "id" => utf8_encode($data['0']),
                    "name" => utf8_encode($data['1']),
                    "slug" => utf8_encode($data['2'])
                ]);    
            }
            $firstline = false;
        }
        
        fclose($csvFile);

    }
}
