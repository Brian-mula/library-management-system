<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

   protected $fillable=['title','publisher','book_number','subject_id','category_id'];




public function category(){
    return $this->belongsTo(Category::class,'category_id');
}

public function subject(){
    return $this->belongsTo(Subject::class,'subject_id');
}

}
