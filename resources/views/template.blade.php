<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href={{asset ('assets1/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    {{-- <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#025464 ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand ">Smart Pensil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Home</a>
                    </li> 
                    <li class="nav-item">
                        <a href="" class="nav-link">Shop</a>
                    </li> 
                    <li class="nav-item">
                        <a href="" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

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


    <div class="container pt-5">
        @yield('content')
    </div>
</body>
</html>
<script src={{ asset ('assets1/bootstrap/js/bootstrap.min.js') }}></script>