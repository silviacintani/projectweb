<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function keranjang(){
        return $this->hasMany(keranjang::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_produk');
    }
}
