<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class Pet extends Model
{
    use HasFactory;

    
    public function owner ()
    {
        return $this->belongsTo(Owner::class );
    }

    public function image ()
    {
        return $this->hasOne(Image::class );
    }


}
