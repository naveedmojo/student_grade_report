<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    protected $table = 'students';

    protected $fillable = ['name','username','phone','password','section_id','teacher_id','email'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function grade()
    {
        return $this->hasMany(Grade::class);
    }
}
