<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;


    public function files()
    {
        return $this->hasOne(Files::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
