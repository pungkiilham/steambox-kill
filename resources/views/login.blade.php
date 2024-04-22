@include('header')

<body id="login-page">

<div class="container-fluid px-0 o-hidden">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-12">

                <div class="card o-hidden border-0 shadow-lg vh-100">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row vh-100">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6 position-relative">
                                <div class="header-login d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('images/ptsiap_logo.png') }}" class="logo-login">
                                    <a href="" class="btn-help"><i class="fa fa-chevron-right"></i>help</a>
                                </div>
                                <div class="row align-items-center justify-content-center vh-100">
                                    <div class="col-12 col-sm-7">
                                        <div class="text-center">
                                            <h1 class="h2 text-gray-900 font-weight-bold mb-4">Login</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <label for="username" class="mb-1">Username</label>
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group mb-1">
                                                <label for="password" class="mb-1">Password</label>
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <div class="form-group text-right mb-4">
                                                <button type="button" class="small btn btn-red px-2 text-white btn-action" data-toggle="modal" data-target="#lupaPassword">Forgot Password?</button>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


<!-- Modal Lupa Password -->
<div class="modal fade" id="lupaPassword" tabindex="-1" role="dialog" aria-labelledby="lupaPasswordLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="{{ asset('images/forgot-password.jpg') }}" alt="">
        <h2>Lupa password?</h2>
        <div class="text-gray-800">Jangan panik, hubungi superadmin terdekat untuk membantu masalahmu</div>
        <form action="">
            <div class="d-flex justify-content-around mb-3 pt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OKE SIAP</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('footer')
