<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckOut</title>
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

    <div class="container my-5">
        <h1 class="mb-4">CheckOut</h1>
        <div class="row">
            <div class="col-mb-8">
                <h4 class="mb-3">Informasi Pengiriman</h4>
                <form action="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" required>
                    </div> 
                    <div class="col-sm-6">
                        <label for="pempayaran" class="form-label">Pembayaran</label>
                        <select name="" id="pembayaran" class="form-select">
                            <option value="">dana</option>
                            <option value="">gopay</option>
                            <option value="">cash</option>
                        </select>
                    </div>

                    <hr class="my-5" style="width: 66vh">
                    <button class="w-50 btn btn-secondary btn-lg" type="submit">CheckOut</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
</html>