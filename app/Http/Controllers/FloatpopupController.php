<?php

namespace App\Http\Controllers;

use App\Models\GunungApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloatpupController extends Controller
{
    public function view($id)
    {
        return view('floatpopup',['id'=>$id]);
    }



}
