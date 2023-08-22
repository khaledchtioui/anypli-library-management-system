<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = ['books', 'audio books', 'magazine'];
        $books = Book::all();

            foreach ($books as $book) {
                $randomType = $types[array_rand($types)];
                $book->type = $randomType;
                $book->save();
            }
        //
    }
}
