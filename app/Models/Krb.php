<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GunungApi;

class Krb extends Model
{
    use HasFactory;

    public function gunungapi()
    {
        return $this->belongsTo(GunungApi::class,'gunungapi_id', 'id');
    }

}
