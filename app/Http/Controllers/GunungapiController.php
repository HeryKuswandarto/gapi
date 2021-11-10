<?php

namespace App\Http\Controllers;

use App\Models\GunungApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GunungapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $gunungapi = DB::table('gunungapi')->get();
        // return view('gunungapi.index',['gunungapi' => $gunungapi]);
        $gunungapis = GunungApi::all();
        return view('gunungapi.index',['gunungapis' => $gunungapis]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gunungapi.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // DB::table('gunungapi') ->insert([
        //    'code' => $request->code,
        //    'name' => $request->name,
        //    'othername' => $request->othername,
        //    'latitude' => $request->latitude,
        //    'longitude' => $request->longitude,
        //    'altitude' => $request->altitude,
        //    'region' => $request->region,
        // ]);
        $gunungapi = new GunungApi();
        $gunungapi->code = $request->code;
        $gunungapi->name = $request->name;
        $gunungapi->othername = $request->othername;
        $gunungapi->latitude = $request->latitude;
        $gunungapi->longitude = $request->longitude;
        $gunungapi->altitude = $request->altitude;
        $gunungapi->region = $request->region;
        $gunungapi->save();
        return redirect()->route('gunungapi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$gunungapi=DB::table('gunungapi')->where('id',$id)->get();
         $gunungapi = GunungApi::find($id);
        //return dd($gunungapi);
        return view('gunungapi.edit',['gunungapi'=>$gunungapi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // DB::table('gunungapi')->where('id',$request->id)->update([
        //     'code'=>$request->code,
        //     'name'=>$request->name,
        //     'othername'=>$request->othername,
        //     'latitude'=>$request->latitude,
        //     'longitude'=>$request->longitude,
        //     'altitude'=>$request->altitude,
        //     'region'=>$request->region,
        // ]);
        $gunungapi = Gunungapi::find($request->id);
        $gunungapi->code = $request->code;
        $gunungapi->name = $request->name;
        $gunungapi->othername = $request->othername;
        $gunungapi->latitude = $request->latitude;
        $gunungapi->longitude = $request->longitude;
        $gunungapi->altitude = $request->altitude;
        $gunungapi->region = $request->region;
        $gunungapi->update();        
        return redirect()->route('gunungapi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('gunungapi')->where('id',$id)->delete();
        $gunungapi = Gunungapi::find($id);
        $gunungapi->delete();
        return redirect()->route('gunungapi.index');
    }
}
