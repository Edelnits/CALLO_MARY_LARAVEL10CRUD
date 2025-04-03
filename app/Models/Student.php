<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable =
    [
        'id_number',
        'firstname',
        'middlename',
        'lastname',
        'department_id'
    ];


    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function grades() {
        return $this->hasOne(Grade::class);
    }
}
