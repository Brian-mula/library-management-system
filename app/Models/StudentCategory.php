<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCategory extends Model
{
    use HasFactory;
   
    protected $fillable=[
        'name'
    ];


    public function student(){
        return $this->hasMany(Student::class,'student_category_id');
    }
}
