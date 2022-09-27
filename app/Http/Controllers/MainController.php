<?php

namespace App\Http\Controllers;

use App\Models\GunungApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function view()
    {
        $gunungapis = GunungApi::all();
        $hasil=array();
        foreach($gunungapis as $row){
            $hasil[]=array($row->id,$row->name,$row->latitude,$row->longitude);
        }
        $this->data=array(
            'daftar'=> $gunungapis,
            'lokasi'=> $hasil,
        );
        // return view('main',['gunungapis' => $gunungapis]);
        return view('main',$this->data);
    }



}
