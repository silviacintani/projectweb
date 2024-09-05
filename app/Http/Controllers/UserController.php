<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    //
    public function authentication(Request $request)
    {
        $validatedata = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedata)){
            return redirect('/index');
        }

        return redirect()->back()->with('statuslogin', 'Maaf Login anda gagal');
    }

//   public function show(){
//         return view('/index');
//     }  



    public function showuser()
    {
        $data['user'] = User::orderby('name', 'asc')->get();
        $data['total_user'] = User::count();
        return view('/user', $data);
    }

    public function searchuser(Request $request)
    {
        $data ['user'] = User::where('name', $request->cari)->orWhere('email', $request->cari)->get();
        $data ['total_user'] = $data['user']->count();

        return view('user', $data);
    }

    public function createuser(){
        return view('user-create');
    }

    public function adduser(Request $request){
        $validatedata = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)->symbols()->mixedCase(),]
        ]);

        $user =  User::create($validatedata);
        if ($user) {
            # code...
            Session::flash('pesan', 'Data berhasil ditambahkan');
        }else {
            # code...
            Session::flash('pesan', 'Data gagal ditambahkan');
        }
        return redirect('user');
    }

        public function delete(Request $request)
        {
            // $produk = produk::find($request->id);
            $delete = user::where('id', $request->id)->delete();
            if ($delete) {
                Session::flash('pesan', 'Data berhasil dihapus');
            }else {
                Session::flash('pesan', 'Data gagal dihapus');
            }
            
            return redirect('produk');
        }

        public function edit(Request $request)
        {
            $data['user'] = User::find($request->id);
            return view('user-edit', $data);
        }

        public function update(Request $request){

            $update =  User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            
            if ($update) {
                # code...
                Session::flash('pesan', 'Data berhasil diubah');
            }else {
                # code...
                Session::flash('pesan', 'Data gagal diubah');
            }
            return redirect('user');

        }
}
