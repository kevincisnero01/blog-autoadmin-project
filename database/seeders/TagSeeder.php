<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //Tag::truncate();

    $csvFile = fopen(base_path("database/data/tag.csv"), "r");
    $firstline = true;

    while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
        if (!$firstline) {
            Tag::create([
                "id" => utf8_encode($data['0']),
                "name" => utf8_encode($data['1']),
                "slug" => utf8_encode($data['2']),
                "color" => utf8_encode($data['3'])
            ]);    
        }
        $firstline = false;
    }
    
    fclose($csvFile);

    }
}
