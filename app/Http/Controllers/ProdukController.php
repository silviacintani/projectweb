<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    //
    public function show(){
        $data['produk'] = produk::orderby('nama_produk', 'asc')->get();
        $data['total'] = produk::count();

        return view('index', $data);
    }

    public function search(Request $request)
    {
        $data ['produk'] = produk::where('nama_produk', $request->cari)->orWhere('kategori', $request->cari)->get();
        $data ['total'] = $data['produk']->count();

        return view('index', $data);
    }

    public function create(){
        return view('produk-create');
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'nama_produk' => 'required',
            'category' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'foto' => 'image',

        ]);

        $fileName = '';
        if ($request-> file('foto')) {
            # code...
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $produk =  produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->category,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'foto' => $fileName
        ]);

        if ($produk) {
            # code...
            Session::flash('pesan', 'Data berhasil ditambahkan');
        }else {
            # code...
            Session::flash('pesan', 'Data gagal ditambahkan');
        }
        return redirect('produk');
    }

        public function delete(Request $request)
        {
            // $produk = produk::find($request->id);
            $delete = produk::where('id', $request->id)->delete();
            if ($delete) {
                Session::flash('pesan', 'Data berhasil dihapus');
            }else {
                Session::flash('pesan', 'Data gagal dihapus');
            }
            
            return redirect('produk');
        }

        public function edit(Request $request)
        {
            $data['produk'] = produk::find($request->id);
            return view('produk-edit', $data);
        }

        public function update(Request $request){
            
            $fileName = '';
            if ($request->file('foto')) {
                # code...
                $extfile = $request->file('foto')->getClientOriginalExtension();
                $fileName = time() . "." .$extfile;
                $request->file('foto')->storeAs('foto', $fileName);
            }

            $update =  produk::where('id', $request->id)->update([
                'nama_produk' => $request->nama_produk,
                'kategori' => $request->category,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'foto' => $fileName
            ]);
            
            if ($update) {
                # code...
                Session::flash('pesan', 'Data berhasil diubah');
            }else {
                # code...
                Session::flash('pesan', 'Data gagal diubah');
            }
            return redirect('produk');

        }
}
