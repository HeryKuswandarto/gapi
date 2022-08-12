<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stasiun;
use Illuminate\Support\Facades\DB;
use App\Models\GunungApi;
use App\Models\Jenisstasiun;

class StasiunController extends Controller
{
    public function index()
    {
        // return $gunungapis = GunungApi::with('stasiuns')->get();
        $stasiuns = Stasiun::with('gunungapi', 'jenisstasiun')->get();
        // dd($stasiuns);
        // return $stasiuns;

        return view('stasiun.index',['stasiuns' => $stasiuns]);
    }

    public function create()
    {
        $gunungapis=GunungApi::all();
        $jenisstasiuns=JenisStasiun::all();
        return view('stasiun.create',compact('gunungapis','jenisstasiuns'));
    }

    public function edit($id)
    {


        $gunungapis=GunungApi::all();
        $jenisstasiuns=JenisStasiun::all();
        $stasiun = Stasiun::findOrFail($id);

        // return [
        //     'stasiun'=>$stasiun,
        //     'name'=>$stasiun->name,
        //     'gunungapiSelected'=>$stasiun->gunungapi_id,
        //     'jenisstasiunSelected'=>$stasiun->jenis_id,
        //     'code'=>$stasiun->code,
        //     'latitude'=>$stasiun->latitude,
        //     'longitude'=>$stasiun->longitude,
        //     'altitude'=>$stasiun->altitude,
        //     'gunungapis'=>$gunungapis,
        //     'jenisstasiuns'=>$jenisstasiuns,
        // ];
         return view('stasiun.edit',[
            'stasiun'=>$stasiun,
            'gunungapis'=>$gunungapis,
            'jenisstasiuns'=>$jenisstasiuns,
        ]);
    }

    public function update(Request $request, $id)


    {
        //return $request;
        $stasiun = Stasiun::findOrFail($id);
        $stasiun->name = $request->name;
        $stasiun->gunungapi_id=$request->gunungapi_id;
        $stasiun->jenis_id=$request->jenisstasiun_id;
        $stasiun->code=$request->code;
        $stasiun->latitude=$request->latitude;
        $stasiun->longitude=$request->longitude;
        $stasiun->altitude=$request->altitude;
        $stasiun->update();
        return redirect()->route('stasiun.index');
    }

    public function store(Request $request)
    {
        $stasiun = new Stasiun();
        $stasiun->name = $request->name;
        $stasiun->gunungapi_id = $request->gunungapi_id;
        $stasiun->jenis_id = $request->jenisstasiun_id;
        $stasiun->code = $request->code;
        $stasiun->latitude = $request->latitude;
        $stasiun->longitude = $request->longitude;
        $stasiun->altitude = $request->altitude;
        $stasiun->save();
        return redirect()->route('stasiun.index');
    }

    public function destroy($id)
    {
        $stasiun = Stasiun::find($id);
        $stasiun->delete();
        return redirect()->route('stasiun.index');
    }


}
