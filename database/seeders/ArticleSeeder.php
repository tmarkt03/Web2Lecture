<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Laravel 8',
            'description' => 'Laravel tutorial',
        ]);
        DB::table('articles')->insert([
            'title' => 'Laravel 8 image upload',
            'description' => 'Upload images in Laravel 8',
        ]);
        DB::table('articles')->insert([
            'title' => 'Laravel 8 Multiple Images Upload',
            'description' => 'This is a tutorial on multiple images upload in Laravel 8',
        ]);
        DB::table('articles')->insert([
            'title' => 'Laravel 8 File Upload',
            'description' => 'Upload any file in Laravel 8',
        ]);
        DB::table('articles')->insert([
            'title' => 'Laravel 8 Datatable Implementation',
            'description' => 'Implement datatable in Laravel 8 usin Yajra Datatable',
        ]);
        DB::table('articles')->insert([
            'title' => 'Laravel Livewire',
            'description' => 'This is a Laravel Llivewire tutorial',
        ]);
    }
}
