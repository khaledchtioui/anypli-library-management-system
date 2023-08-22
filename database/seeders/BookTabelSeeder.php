<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $books = Book::all();
        $categoryIds = Category::pluck('id')->toArray();

        foreach ($books as $book) {
            $randomCategoryId = collect($categoryIds)->random();
            $book->category_id = $randomCategoryId;
            $book->save();
        }

     //   DB:tabel("Books")->
    }
}
