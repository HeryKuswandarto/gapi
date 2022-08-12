<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GunungApi extends Model
{
    use HasFactory;

    protected $table = 'gunungapi';

    public function stasiuns()
    {
        return $this->hasMany(Stasiun::class,'gunungapi_id', 'id');

    }

}
