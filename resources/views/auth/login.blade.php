<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>D'Sewa | Login</title>

    <!-- Font bawaan SB Admin 2 -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">

    <!-- CSS utama SB Admin 2 -->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<!-- Gunakan background gradasi biru bawaan SB Admin 2 -->
<body class="bg-body-secondary">

    <div class="container">

        <!-- Baris utama untuk posisi tengah -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8">

                <!-- Card login -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Isi card -->
                        <div class="p-5">

                            <!-- Judul dan ikon di bagian atas -->
                            <div class="text-center">
                                <i class="fas fa-user fa-3x text-primary mb-2"></i>
                                <h1 class="h4 text-gray-900 mb-2"><b>D'Sewa</b></h1>
                                <p class="text-gray-600 small mb-4">Please sign in to continue</p>
                            </div>

                            <!-- Form login -->
                            <form class="user" method="POST" action="{{ route('cek_login') }}">
                                @csrf
                                <!-- Input email -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="email" placeholder="Email" required>
                                </div>

                                <!-- Input password -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" placeholder="Password" required>
                                </div>

                                <!-- Checkbox remember me dan link forgot password -->
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="rememberCheck">
                                        <label class="custom-control-label" for="rememberCheck">Remember Me</label>
                                    </div>
                                    <a class="small text-primary" href="#">Forgot Password?</a>
                                </div>

                                <!-- Tombol login -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>

                            <hr>

                            <!-- Link ke halaman register -->
                            <div class="text-center">
                                <a class="small text-primary" href="#">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir card login -->

            </div>

        </div>

    </div>

    <!-- Script bawaan Bootstrap dan SB Admin 2 -->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

    <!-- Sweetalert -->
     <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

     @session('success')
     <script>
        Swal.fire({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success"
        });
     </script>
     @endsession

     @session('error')
     <script>
        Swal.fire({
            title: "Failed",
            text: "{{ session('error') }}",
            icon: "error"
        });
     </script>
     @endsession

</body>

</html>
