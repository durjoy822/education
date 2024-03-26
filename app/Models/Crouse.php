<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crouse extends Model
{
    use HasFactory;


    public function Category()
    {
        return $this->belongsTo(CrouseCategory::class);
    }
    public function Teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}