<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm" style="background-color: #025464; height: 10vh;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand " style="color: white;font-size:3vh">smart pensil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <form action="/home" class="d-flex" style="margin-right: 600px; width: 50vh; justify-content: center;">
                    <input type="search" class="form-control me-2" placeholder="search">
                  
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item" >
                        <a href="/home" class="nav-link" style="color: white; font-size:2vh">Home</a>
                    </li> 
                    <li class="nav-item" >
                        <a href="#" class="nav-link" style="color: white; font-size:2vh">Shop</a>
                    </li> 
                    <li class="nav-item" style="margin-right:25px">
                        <a href="#" class="nav-link" style="color: white; font-size:2vh">Contact Us</a>
                    </li> 
                </ul>
                <div class="navbar-nav">
                    <div class="nav-item" style="margin-right:3vh ; color:white;">
                      
                    <i class="fas fa-shopping-cart fs-4" style="margin-top: 20px"></i>

                    </div>
                   
                   <ul class="navbar nav">
                    <li class="nav-item" style="margin-right:25px">
                        <a href="/" class="nav-link" style="color: white; font-size:2vh">Logout</a>
                    </li> 
                   </ul>
                </div>
            </div>
        </div>
    </nav>

    <h2 class="mb-4 mt-5" style="margin-left: 20%;">Detail Produk</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/storage/foto/'.$produk->foto)}}" alt="ProductImage" style="margin-left: 20%; width:500px; height:400px" class="img-fluid rounded">
            </div>


            <div class="col-md-6">
                <h1 class="display-5">{{$produk->nama_produk}}</h1>
                <p class="lead text-muted">{{$produk->kategori}}</p>
                <p class="fs-4 fw-bold">Rp.{{$produk->harga}}</p>
                <p class="mb-4">
                    {{$produk->deskripsi}}
                </p>
                <div class="mb-4">
                    <label for="quantity" class="form-label">Kuantitas</label>
                    <input type="number" id="quantity" class="form-control w-25" value="1" min="1">
                </div>
                <div class="d-flex">
                    <form action="/keranjang/{{$produk->id}}" method="post">
                        @csrf
                        <input type="submit" value="tambahkan ke keranjang" class="btn btn-secondary">
                    </form>

                    <form action="/keranjang/{{$produk->id}}" method="post">
                        @csrf
                        <input type="submit" value="Beli Sekarang" class="btn btn-secondary ms-2">
                    </form>
                </div>
                {{-- <a href=""><button class="btn btn-secondary mt-3">Tambahkan Ke keranjang</button></a>
                <a href="/checkout"><button class="btn btn-secondary mt-3">Beli Sekarang</button></a> --}}
            </div>
        </div>
    </div>
    {{-- <div class="container" style="margin-left: 15%;">
        <div class="row">
            <div class="col-md-4">
                
                    <div class="row g-0">
                        <div class="col-mb-4">
                           
                            <img src="images/penghapus.jpg" alt="Gambar Produk" class="img-fluid" width="450px" height="450px">
                        </div>
                    </div>
                
            </div>
            
            <div class="col-md-8 mt-5">
                <div class="card-body">
                        <h5 class="card-title">Ballpoint</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati <br> eligendi eius nam, doloribus esse deserunt doloremque <br> cupiditate beatae rerum. Omnis.</p>
                        <p class="card-text"><small class="text-muted">Harga: Rp.5000</small></p>
                        <div class="mb-4">
                            <label for="quantity" class="form-label">Kuantitas</label>
                            <label for="number" id="quantity" class="form-control w-25" value="1" min="1">2</label>
                        </div>
                </div>

                <div class="col-md-5 mt-4">
                    
                        <div class="card-body">
                            <h5 class="card-title">Ringkasan Pesanan</h5>
                            <p class="card-text">Total Harga: Rp.10.000</p>
                            <a href="/checkout"><button class="btn btn-secondary mt-3">Beli Sekarang</button></a>
                        </div>
                    
                </div>
            </div>

        </div>
    </div> --}}

</body>
<script src="{{asset('assets1/bootstrap/css/bootstrap.min.css')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</html>