<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\produk;
// use App\Models\Produk as ModelsProduk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    //

    function addchart(produk $produk){
        if (!auth()->check()) {
            # code...
            return redirect()->route('login2')->with('error', 'anda harus login terlebih dahulu');
        }

        Keranjang::create([
            'user_id' => auth()->user()->id,
            'produk_id' => $produk->id,
            'quantity' =>1
        ]);

        return redirect()->back()->with('Sukses', 'produk berhasil ditambahkan kekeranjang');
    }

    function delete(Request $request){
        $delete = Keranjang::find($request);
        $keranjang = Keranjang::where('id', $request->id)->delete();
        if ($keranjang) {
            # code...
        return redirect()->back()->with('Sukses', 'produk berhasil dihapus dari keranjang');
        }else {
            # code...
        return redirect()->back()->with('Sukses', 'produk gagal ditambahkan kekeranjang');
        }
    }

    function Show(){
        $data['produk'] = produk::all();
        $data['produk'] = produk::all();
        return view('/keranjang', $data);
    }
}