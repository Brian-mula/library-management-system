<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'admission_number',
        'student_category_id',
        'parents_contacts',
    ];

    public function studentcat(){
        return $this->belongsTo(StudentCategory::class,'student_category_id');
    }
}
