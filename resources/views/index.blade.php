@extends('templat')
@section('content')
    
    {{-- <h2>Data Pengguna</h2> --}}
    @if (Session::get('pesan'))
        {{ Session::get('pesan') }}
    @endif
    
    <div class="row">
        <div class="col-md-6">
            <a href="/produk/create" class="btn btn-secondary">Tambah Data</a><br>
        </div>
        <div class="col-md-6">
            <form action="/search" method="post" >
                @csrf
                <div class="input-group mb-3">
                <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                <button class="btn btn-success" type="submit">Go</button>
                </div>
            </form>
        </div>
    </div>


    {{-- Total Data Pengguna : {{$total}} --}}

    <table class="table">
        <tr style="background-color:#025464; color:white ">
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>KATEGORI</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>FOTO</th>
            <th>AKSI</th>
            

        </tr>
        @foreach ($produk as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->harga }}</td>
                <td><img src="{{asset('storage/foto/' .$item->foto)}}" alt="" style="width: 80px; height:80px"></td>
                {{-- <td>{{ $item->aksi}}</td> --}}
                <td>
                    <a href="produk/delete/{{$item->id}}" onclick="return window.confirm ('Yakin hapus data ini?')" class="btn btn-danger">Hapus</button></a>
                    <a href="produk/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
    @endsection