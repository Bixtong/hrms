<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    protected $fillable = ['name'];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function leave()
    {
        return $this->hasMany(Leave::class);
    }

}
