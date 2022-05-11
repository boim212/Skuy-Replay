<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekaman7 extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $table = 'rekaman7s';

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
