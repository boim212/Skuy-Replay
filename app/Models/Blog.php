<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;	

    protected $guarded = ['id'];

    protected $table = 'blogs';

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
