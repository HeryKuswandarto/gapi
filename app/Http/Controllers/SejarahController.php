<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Stasiun;
use Illuminate\Support\Facades\DB;
use App\Models\GunungApi;
use App\Models\Sejarah;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarahs = Sejarah::with('gunungapi')->get();

        return view('sejarah.index',['sejarahs' => $sejarahs]);
    }

    public function create()
    {
        $gunungapis=GunungApi::all();
        return view('sejarah.create',compact('gunungapis'));
    }

    public function edit($id)
    {


        $gunungapis=GunungApi::all();
        $sejarah = Sejarah::findOrFail($id);

         return view('sejarah.edit',[
            'sejarah'=>$sejarah,
            'gunungapis'=>$gunungapis,
        ]);
    }

    public function update(Request $request, $id)

    {
        $validator = Validator::make($request->all(),[
            'vei' => 'required|integer|between:0,7',
        ])->validate();

        $sejarah = Sejarah::findOrFail($id);
        $sejarah->tahun = $request->tahun;
        $sejarah->gunungapi_id=$request->gunungapi_id;
        $sejarah->vei=$request->vei;
        $sejarah->keterangan=$request->keterangan;
        $sejarah->update();
        return redirect()->route('sejarah.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'vei' => 'required|integer|between:0,7',
        ])->validate();

        $sejarah = new Sejarah();
        $sejarah->tahun = $request->tahun;
        $sejarah->gunungapi_id=$request->gunungapi_id;
        $sejarah->vei=$request->vei;
        $sejarah->keterangan=$request->keterangan;
        $sejarah->save();
        return redirect()->route('sejarah.index');
    }

    public function destroy($id)
    {
        $sejarah = Sejarah::find($id);
        $sejarah->delete();
        return redirect()->route('sejarah.index');
    }


}
