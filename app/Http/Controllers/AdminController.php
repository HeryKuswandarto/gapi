<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Stasiun;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::all();
        return view('admin.index',['admins' => $admins]);
    }

    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {

         $validator=[
             'name'=> 'required|min:4',
             'email'=> 'required|email',
             'password'=> 'min:6|required_with:passwordconfirm|same:passwordconfirm',
             'passwordconfirm'=> 'min:6'
         ];
         $this->validate($request,$validator);

         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $hashpwd=Hash::make($request->password);
         $user->password = $hashpwd;
         $user->save();
         return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect()->route('admin.index');
    }


}
