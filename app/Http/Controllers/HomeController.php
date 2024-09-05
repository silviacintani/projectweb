<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // public function index(){
    //     $data['artikel'] = [
    //      [
    //          'judul' => 'judul pertama',
    //          'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, maiores!'
    //      ], 
    //      [
    //          'judul' => 'judul kedua',
    //          'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, maiores!'
    //      ], 
    //      [
    //          'judul' => 'judul ketiga',
    //          'isi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, maiores!'
    //      ],
    //     ];

    // return view('beranda', $data);
    // }

    public function login2(){
        return view('login2');
    }

    public function showhme(){
        $data['produk']= produk::all();
        return view('/home', $data);
    } 

    public function templat(){
        return view('/templat');
    } 

    public function detail($id){
        $data['produk'] = produk::where('id', $id)->first();
        return view('/detail', $data);
    } 


    public function checkout(){
        return view('/checkout');
    } 


    // public function logout(){
    //     return view('/');
    // }

    
}
