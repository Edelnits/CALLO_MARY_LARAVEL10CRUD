<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = 'grades';
    protected $fillable =
    [
        'student_id',
        'midterm',
        'final',
    ];
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
