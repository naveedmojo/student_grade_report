<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Teacher extends Authenticatable
{
    protected $table = 'teachers';

    protected $fillable = ['name','username','password'];
    public function student()
    {
        return $this->hasMany(Student::class);
    }

}
