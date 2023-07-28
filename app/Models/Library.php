<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function inventory()
    {
        return $this->hasMany(Book::class, 'library_id', 'id_library');
    }

    public function visitors()
    {
        return $this->hasMany(Visitor::class, 'library_id', 'id_library');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'library_id', 'id_library');
    }

    public function librarian()
    {
        return $this->hasOne(Librarian::class, 'library_id', 'id_library');
    }



}
