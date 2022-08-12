<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisstasiun;
use Illuminate\Support\Facades\DB;
class JenisstasiunController extends Controller
{
    public function index()
    {
        $jenisstasiuns = Jenisstasiun::all();
        return view('jenisstasiun.index',['jenisstasiuns' => $jenisstasiuns]);
    }

    public function create()
    {
        return view('jenisstasiun.create');
    }

    public function edit($id)
    {
         $jenisstasiun = Jenisstasiun::findOrFail($id);
        return view('jenisstasiun.edit',['jenisstasiun'=>$jenisstasiun]);
    }

    public function update(Request $request, $id)
    {
        $jenisstasiun = Jenisstasiun::findOrFail($id);
        $jenisstasiun->jenis = $request->jenis;
        $jenisstasiun->update();
        return redirect()->route('jenisstasiun.index');
    }

    public function store(Request $request)
    {
        $jenisstasiun = new Jenisstasiun();
        $jenisstasiun->jenis = $request->jenis;
        $jenisstasiun->save();
        return redirect()->route('jenisstasiun.index');
    }

    public function destroy($id)
    {
        $jenisstasiun = Jenisstasiun::find($id);
        $jenisstasiun->delete();
        return redirect()->route('jenisstasiun.index');
    }

}
