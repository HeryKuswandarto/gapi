<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GapiController extends Controller
{
    public function gunungapi_index(){
        return view('gunungapi.index');
    }
    public function jenisstasiun_index(){
        return view('jenisstasiun.index');
    }
    public function stasiun_index(){
        return view('stasiun.index');
    }
    public function sejarah_index(){
        return view('sejarah.index');
    }
    public function krb_index(){
        return view('krb.index');
    }
    public function admin_index(){
        return view('admin.index');
    }

}
