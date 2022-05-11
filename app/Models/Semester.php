<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semesters';

    protected $guarded = ['id'];

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }

    public function matkul()
    {
        return $this->hasMany(Matkul::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function rekaman1()
    {
        return $this->hasMany(Rekaman1::class);
    }

    public function rekaman2()
    {
        return $this->hasMany(Rekaman2::class);
    }

    public function rekaman3()
    {
        return $this->hasMany(Rekaman3::class);
    }

    public function rekaman4()
    {
        return $this->hasMany(Rekaman4::class);
    }

    public function rekaman5()
    {
        return $this->hasMany(Rekaman5::class);
    }

    public function rekaman6()
    {
        return $this->hasMany(Rekaman6::class);
    }

    public function rekaman7()
    {
        return $this->hasMany(Rekaman7::class);
    }

    public function rekaman8()
    {
        return $this->hasMany(Rekaman8::class);
    }
}
