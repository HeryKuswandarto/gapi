<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisstasiun extends Model
{
    use HasFactory;

    public function stasiun()
    {
        return $this->hasMany(Stasiun::class);
    }
}
