<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('assets1/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#025464 ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">SMART PENSIL</a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="/auth" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>

                            <div class="form-check d-flex justify-content-start pr-3 mt-2">
                                <input type="checkbox" class="form-input" value="" id="forminput">
                                <label for="forminput" class="formlabel">Remember password</label>
                            </div>

                            {{-- <div class="form-group mt-2">
                                <a href="#">forgot password</a>
                            </div> --}}
                            <button type="submit" class="btn btn-secondary btn-block mt-3 w-100">Login</button>

                            <hr class="my-4">
                            <div class="google">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                                  </svg> --}}
                                <a href="/register"></a><button type="submit" class="btn btn-secondary btn-block mt-2 w-100"><i class="bi bi-google"></i>Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="login">
        <h4 class="title">Smart Pencil</h4>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="/auth" method="post">
                    <div class="card-mt-3">
                        <div class="card-header text-center">LOGIN</div>
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</body>
<script src="{{asset('assets1/bootstrap/js/bootstrap.min.js')}}"></script>
</html>