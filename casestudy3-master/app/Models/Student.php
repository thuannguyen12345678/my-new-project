<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    function borrow_books(){
        return $this->belongsToMany(Book::class, 'borrow_books', 'student_id' , 'book_id');
        
    }

}
