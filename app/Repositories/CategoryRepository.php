<?php

namespace App\Repositories;

use App\Models\Category;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CategoryRepository.
 */
class CategoryRepository
{
    public function getAll()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return Category::findOrFail($id);
    }

    public function create($data)
    {
        return Category::create($data);
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
