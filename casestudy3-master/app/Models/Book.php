<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    function type(){
        return $this->belongsTo(Type::class, 'type_id' , 'id');
        
    }
    function borrow_books(){
        return $this->belongsToMany(Student::class, 'borrow_books', 'book_id' , 'student_id');
        
    }
}
