<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $guarded = [];

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }
}
