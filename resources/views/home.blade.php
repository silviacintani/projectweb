    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('assets1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <!-- <button class="btn btn-outline-succes" type="submit">Search</button> -->
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
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                          </svg> --}}
                    <i class="fas fa-shopping-cart fs-4" style="margin-top: 20px"></i>

                    </div>
                    {{-- <div class="nav-item" style="margin-right: 5vh; color:white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                    </div> --}}
                   <ul class="navbar nav">
                    <li class="nav-item" style="margin-right:25px">
                        <a href="/" class="nav-link" style="color: white; font-size:2vh">Logout</a>
                    </li> 
                   </ul>
                </div>
            </div>
        </div>
    </nav>
    
    {{-- <div class="banner">
        <img src="images/apa.webp" alt="" width="100%" height="705px" >
    </div> --}}

    <section class="best">
         <div class="container">
             <h2 style="text-align: center; margin-top: 5%; margin-right:28px">Categories</h2>
             <div class="row" style="margin-left: 30vh">
                 <div class="col-md-3">
                     <button type="button" class="btn mt-5" style="background-color: #025464; width:150px; height:50px; color:white" class="rounded-pill-5" >Ballpoint</button>
                 </div>
                 
                 <div class="col-md-3">
                     <button type="submit" class="btn mt-5" style="background-color: #025464; width:150px; height:50px; color:white" >Penghapus</button>
                 </div>
 
                 <div class="col-md-3">
                     <button class="btn mt-5" style="background-color: #025464; width:150px; height:50px; color:white" >Pensil gambar</button>
                 </div>
             </div>
             
         </div>
    </section>

    <div class="category" style="margin-top: 100px;">
        <h3 style="margin-bottom: 30px; margin-left:315px" class="mt-3">New Product</h3>
        <div class="container">
            <div class="row">
                @foreach ($produk as $key => $item)
                    
                <div class="card" style="width: 18rem; margin-left:3%; margin-top:5%">
                    <a href="/detail/{{$item->id}}">
                    <img src="{{asset('/storage/foto/'.$item->foto)}}" alt="" class="card-image-top" style="width: 200px; height:200px: margin-left:50px;">
                    </a>
    
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama_produk}}</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="" class="btn btn-secondary" >Beli Sekarang</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <h3 style="margin-bottom: 30px; margin-left:315px" class="mt-5">Best Seller</h3>
        <div class="row mt-5" style="margin-left: 300px">
            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/ballpoint.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Ballpoint pen ambition metal
                        </h6>
                        <div class="card-text">
                           Rp.8000
                        </div>
                        <a href="/detail{id}" class="btn btn-secondary mt-4">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/ballpoint.jpg" class="card-img-top" alt="" style="width: 100%; height: 270px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Faber Castell
                        </h6>
                        <div class="card-text">
                           Rp.20.000
                        </div>
                        <a href="/detail" class="btn btn-secondary mt-4">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/snowman.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Ballpoint stick gel pen 0.7mm
                        </h6>
                        <div class="card-text">
                            Rp.6.500
                        </div>
                        <a href="/detail" class="btn btn-secondary mt-4">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/snowman.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                           penghapus Eraser Joyko Kecil
                        </h6>
                        <div class="card-text">
                            Rp.30.000
                        </div>
                        <a href="/detail" class="btn btn-secondary mt-4">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/snowman.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                           penghapus Eraser Joyko Kecil
                        </h6>
                        <div class="card-text">
                            Rp.30.000
                        </div>
                        <a href="/detail" class="btn btn-secondary mt-4">Tambah ke keranjang</a>
                    </div>
                </div>
            </div>
        </div>




    {{-- <div class="row" style="margin-top: 10px;">
        <div class="col-md-3 mt-5" style="margin-left: 200px;">
            <div class="card-img" style="width: 100%; height: 100">
              <img
                src="images/saleh.jpg"
                class="card-img-top"
                style="width: 150%; height: 230px "
              />
            </div>
          </div>

          <div class="col-md-3 mt-5" style="margin-left: 250px;">
            <div class="card-img" style="width: 100%; height: 100">
              <img
                src="images/biru.webp"
                class="card-img-top"
                style="width: 150%; height: 230px"
              />
            </div>
          </div>
    </div> --}}

    {{-- <div class="categori">
        <div class="row justify-content-center">
            <div class="col-md-3 py-5">
                <img src="images/snowman.jpg" alt="" class="rounded-circle" width="250px" height="250px">
                <h3 class="card-text" style="margin-left: 55px; margin-top: 5px;">
                   Ballpoint
                </h3>
            </div>

            <div class="col-md-3 py-5">
                <img src="images/penghapus.jpg" alt="" class="rounded-circle" width="250px" height="250px" style="margin-left:65px ;">
                <h3 class="card-text" style="margin-left: 14vh; margin-top: 5px;">
                   Penghapus
                </h3>
            </div>

            <div class="col-md-3 py-5">
                <img src="images/faber.jpg" alt="" class="rounded-circle" width="250px" height="250px" style="margin-left: 100px;">
                <h3 class="card-text" style="margin-left: 19vh; margin-top: 5px;">
                   Pensil Warna
                </h3>
            </div>
        </div>
    </div> --}}


    <!-- <h4 style="text-align: center;">Categories</h4> -->
    {{-- <div class="category" style="margin-top: 100px;">
        <h3 style="margin-bottom: 30px; margin-left:315px">See All</h3>
        <div class="row" style="margin-left: 300px">
            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/ballpoint.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Ballpoint pen ambition metal
                        </h6>
                        <div class="card-text">
                           Rp.8000
                        </div>
                        <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/faber.jpg" class="card-img-top" alt="" style="width: 100%; height: 270px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Faber Castell
                        </h6>
                        <div class="card-text">
                           Rp.20.000
                        </div>
                        <a href="#" class="btn btn-secondary mt-4">cekout</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/snowman.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                            Ballpoint stick gel pen 0.7mm
                        </h6>
                        <div class="card-text">
                            Rp.6.500
                        </div>
                        <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card" style="width: 100%;">
                    <img src="images/penghapus.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-text">
                           penghapus Eraser Joyko Kecil
                        </h6>
                        <div class="card-text">
                            Rp.30.000
                        </div>
                        <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="category" style="margin-top: 100px;" >
            <div class="row" style="margin-left:300px">
                <div class="col-md-2">
                    <div class="card" style="width: 100%;">
                        <img src="images/ballpoint.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                        <div class="card-body">
                            <h6 class="card-text">
                                Ballpoint pen ambition metal
                            </h6>
                            <div class="card-text">
                               Rp.8000
                            </div>
                            <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-2">
                    <div class="card" style="width: 100%;">
                        <img src="images/faber.jpg" class="card-img-top" alt="" style="width: 100%; height: 270px;">
                        <div class="card-body">
                            <h6 class="card-text">
                                Faber Castell
                            </h6>
                            <div class="card-text">
                               Rp.20.000
                            </div>
                            <a href="#" class="btn btn-secondary mt-4">cekout</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-2">
                    <div class="card" style="width: 100%;">
                        <img src="images/snowman.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                        <div class="card-body">
                            <h6 class="card-text">
                                Ballpoint stick gel pen 0.7mm
                            </h6>
                            <div class="card-text">
                                Rp.6.500
                            </div>
                            <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="card" style="width: 100%;">
                        <img src="images/penghapus.jpg" class="card-img-top" alt="" style="width: 100%; height: 250px;">
                        <div class="card-body">
                            <h6 class="card-text">
                               penghapus Eraser Joyko Kecil
                            </h6>
                            <div class="card-text">
                                Rp.30.000
                            </div>
                            <a href="#" class="btn btn-secondary mt-4">CheckOut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



            <div class="tulisan" style="margin-top: 25vh;">
                <h3 style="text-align: center;">JOYKO</h3>
                <h6 style="text-align: center;">JOYKO adalah merek alat tulis asli Indonesia sejak tahun 2000 lalu, lho! <br> Produk JOYKO sebagian besar diproduksi langsung di Indonesia dan ada juga yang diimpor dari China. <br>
                    Rekomendasi produk pertama adalah Joyko BP-264 Spino Ball Pen [0.7 mm/ 1 Box/ 12 pcs] yang dibanderol dengan harga 40 ribuan. <br> Produk ini adalah pulpen jenis ball pen atau bolpoin dengan mata bulat berukuran 0,7 mm. Kalau kamu butuh pulpen yang nyaman dan <br> akurat untuk dipakai menulis, produk ini bisa menjadi pilihan yang pas.</h6>
            </div>


            <footer class="footer" style="background-color: #025464; margin-top: 40vh; height: 20vh;">
                <div class="container">
                    <div class="row">
                      <div class="col-md-3" style="font-size: 15px; margin-left:150px;">
                        <h6 class="mb-4 mt-5" style="color: white;">MY ACCOUNT</h6>
                        <div class=>
                          <a href="" class="link-light text-decoration-none d-block"
                            >Order</a
                          >
                          <a href="" class="link-light text-decoration-none d-block"
                            >Acount Setting</a
                          >
                          <a href="" class="link-light text-decoration-none"
                            >Joyko</a
                          >
                        </div>
                      </div>

                      <div class="col-md-3" style="font-size: 15px">
                        <h6 class="mb-4 mt-5" style="color: white;">TENTANG KAMI</h6>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Incidunt aut ea asperiores, accusamus porro<br></p>
                        {{-- <div class=>
                          <a href="" class="link-light text-decoration-none d-block"
                            >Order</a
                          >
                          <a href="" class="link-light text-decoration-none d-block"
                            >Acount Setting</a
                          >
                          <a href="" class="link-light text-decoration-none d-block"
                            >JavaScript Tutorials</a
                          >
                        </div> --}}
                      </div>


                      <div class="col-md-3" style="font-size: 20px">
                       <p style="color: white; margin-top:130px;">copyright@via</p>
                      </div>
                    </div>

                    
                  </div>
            </footer>


</body>
</html>
<script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
