<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GunungApi;
use App\Models\Krb;
use Illuminate\Support\Facades\File;

class KrbController extends Controller
{
    public function index()
    {
        $krbs = Krb::with('gunungapi')->get();

        return view('krb.index',['krbs' => $krbs]);
    }

    public function create()
    {
        $gunungapis=GunungApi::all();
        return view('krb.create',compact('gunungapis'));
    }

    public function edit($id)
    {


        $gunungapis=GunungApi::all();
        $krb = Krb::findOrFail($id);

         return view('krb.edit',[
            'krb'=>$krb,
            'gunungapis'=>$gunungapis,
        ]);
    }

    public function update(Request $request, $id)

    {
        $krb = Krb::findOrFail($id);
        $krb->gunungapi_id=$request->gunungapi_id;
        $krb->tahun = $request->tahun;
        $krb->fileshp=$request->fileshp;
        $krb->filejpg=$request->filejpg;
        $fileshpnew=$request->file('fileshpnew');
        $filejpgnew=$request->file('filejpgnew');
        if (!empty($fileshpnew))
        {
            //hapus file lama
            $hapusshp=$krb->fileshp;
            File::delete('data_file/geojson/'.$hapusshp);
            //masukkan parameter file baru
            $fileshpnewname=$fileshpnew->getClientOriginalName();
            $krb->fileshp=$fileshpnewname;
            //copy file baru
            $tujuan_upload_shp='data_file/geojson';
            $fileshpnew->move($tujuan_upload_shp,$fileshpnew->getClientOriginalName());
        }

        if (!empty($filejpgnew))
        {
            //hapus file lama
            $hapusjpg=$krb->fileshp;
            File::delete('data_file/jpg/'.$hapusjpg);
            //masukkan parameter file baru
            $filejpgnewname=$filejpgnew->getClientOriginalName();
            $krb->filejpg=$filejpgnewname;
            //copy file baru
            $tujuan_upload_jpg='data_file/jpg';
            $filejpgnew->move($tujuan_upload_jpg,$filejpgnew->getClientOriginalName());

        }


        //echo $krb->fileshp;
        //echo $krb->filejpg;

        $krb->update();
        return redirect()->route('krb.index');
    }

    public function store(Request $request)
    {
        $krb = new Krb();
        $krb->gunungapi_id=$request->gunungapi_id;
        $krb->tahun = $request->tahun;
        $fileshp=$request->file('fileshp');
        $filejpg=$request->file('filejpg');

        //echo 'Nama File: '.$fileshp->getClientOriginalName();
        //echo 'Extension: '.$fileshp->getClientOriginalExtension();
        //echo 'Real path: '.$fileshp->getRealPath();
        //echo 'File size: '.$fileshp->getSize();
        //echo 'Mime Type: '.$fileshp->getMimeType();

        $krb->fileshp=$fileshp->getClientOriginalName();
        $krb->filejpg=$filejpg->getClientOriginalName();

        $krb->save();
        $tujuan_upload_shp='data_file/geojson';
        $tujuan_upload_jpg='data_file/jpg';
        $fileshp->move($tujuan_upload_shp,$fileshp->getClientOriginalName());
        $filejpg->move($tujuan_upload_jpg,$filejpg->getClientOriginalName());
        return redirect()->route('krb.index');
    }

    public function destroy($id)
    {
        $krb = Krb::find($id);
        $hapusshp=$krb->fileshp;
        $hapusjpg=$krb->filejpg;
        //echo $hapusshp;
        //echo $hapusjpg;
        File::delete('data_file/geojson/'.$hapusshp);
        File::delete('data_file/jpg/'.$hapusjpg);
        $krb->delete();
        return redirect()->route('krb.index');
    }

}
