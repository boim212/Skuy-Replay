<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekaman5 extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $table = 'rekaman5s';

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
