<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    //mendefinisikan kolom yg boleh d isi
    protected $fillable = ['name', 'nim', 'major', 'class', 'courses_id'];

    //mendefinisikan relasi ke model sourse
    public function course(){
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
