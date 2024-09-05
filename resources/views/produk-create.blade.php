@extends('template')
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center" style="background-color:#025464 ;" >
                    form produk
                </div>
                <div class="card-body">
                    <form action="/produk/create/" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group pt-2">
                            <label for="produkname">Nama Produk</label>
                            <input type="text" class="form-control" id="productname" placeholder="Masukan nama produk" name="nama_produk" value="{{old('nama_produk')}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="category">Kategori</label>
                            <input type="text" class="form-control" id="category" placeholder="Masukan kategori produk" name="category" value="{{old('category')}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="price" placeholder="Masukan harga produk" name="harga" value="{{old('harga')}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="jumlah">jumlah</label>
                            <input type="text" class="form-control" id="quantity" placeholder="Masukan jumlah produk" name="jumlah" value="{{old('jumlah')}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="image">gambar</label>
                            <input type="file" class="form-control" id="image" name="foto">
                        </div>
                        <button type="submit" class="w-100 btn-block mt-5" style="background-color: grey">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection