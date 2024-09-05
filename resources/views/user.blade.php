@extends('template')
@section('content')
    
    <h2>Data Pengguna</h2>
    @if (Session::get('pesan'))
        {{ Session::get('pesan') }}
    @endif
    
    <div class="row">
        <div class="col-md-6">
            <a href="/user/create" class="btn btn-primary">Tambah Data</a><br>
        </div>
        <div class="col-md-6">
            <form action="/user" method="post" >
                @csrf
                <div class="input-group mb-3">
                <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                <button class="btn btn-success" type="submit">Go</button>
                </div>
            </form>
        </div>
    </div>



    Total Data Pengguna : {{$total_user}}

    <table class="table">
        <tr style="background-color: #025464">
            <td>NO</td>
            <td>NAMA</td>
            <td>EMAIL</td>
            <td>LEVEL</td>
            <td>AKSI</td>

        </tr>
        @foreach ($user as $key=> $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->level->nama_level }}</td>
                <td>
                    <a href="user/delete/{{$item->id}}" onclick="return window.confirm ('Yakin hapus data ini?')" class="btn btn-danger">Hapus</button></a>
                    <a href="user/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
    @endsection