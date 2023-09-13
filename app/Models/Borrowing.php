<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'date',
        'borrowDate',
        'returnDate',
        'visitor_id',
        'book_id',
    ];




    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function visitor()
    {
        return $this->belongsTo(User::class);
    }



}
