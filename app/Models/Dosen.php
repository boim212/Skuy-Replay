<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'dosens';

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function matkul()
    {
        return $this->hasMany(Matkul::class);
    }
}
