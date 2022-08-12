<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GunungApi;
use App\Models\Jenisstasiun;

class Stasiun extends Model
{
    use HasFactory;

    public function gunungapi()
    {
        return $this->belongsTo(GunungApi::class,'gunungapi_id', 'id');
    }

    public function jenisstasiun()
    {
        return $this->belongsTo(Jenisstasiun::class,'jenis_id', 'id');
    }

}
