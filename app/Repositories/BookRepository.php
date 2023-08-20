<?php

namespace App\Repositories;

use App\Models\Book;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BookRepository.
 */
class BookRepository
{
    public function getAll()
    {
        return Book::all();
    }

    public function getById($id)
    {
        return Book::findOrFail($id);
    }


    public function create(array $attributes)
    {
        return Book::create($attributes);
    }


    public function update($id, $data)
    {
        $book = $this->getById($id);
        $book->update($data);
        return $book;
    }

    public function delete($id)
    {
        $book = $this->getById($id);
        $book->delete();
    }
}
