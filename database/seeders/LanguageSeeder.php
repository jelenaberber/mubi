<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = ['English', 'Icelandic', 'Polish', 'French', 'Italian','Mandarin', 'Spanish', 'Farsi', 'Tagalog', 'Greek', 'Arabic', 'Silent', 'Swedish'];
        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'name' => $language,
            ]);
        }
    }
}
