<?php
namespace App\Repositories;

use App\Models\Borrowing;

class BorrowingRepository
{
    public function all()
    {
        return Borrowing::all();
    }

    public function find($id)
    {
        return Borrowing::findOrFail($id);
    }

    public function create($data)
    {
        return Borrowing::create($data);
    }

    public function update($id, $data)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->update($data);
        return $borrowing;
    }

    public function delete($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->delete();
    }
}
