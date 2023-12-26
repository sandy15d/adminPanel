<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{URL::to('/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css"/>


</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    <div class="bg-overlay"></div>
                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mb-4">
                                            <a href="index-2.html" class="d-block">
                                                <img src="{{URL::to('/')}}/assets/images/logo-light.png" alt=""
                                                     height="18">
                                            </a>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="mb-3">
                                                <i class="ri-double-quotes-l display-4 text-success"></i>
                                            </div>

                                            <div id="qoutescarouselIndicators" class="carousel slide"
                                                 data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button"
                                                            data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="0" class="active" aria-current="true"
                                                            aria-label="Slide 1"></button>
                                                    <button type="button"
                                                            data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button"
                                                            data-bs-target="#qoutescarouselIndicators"
                                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner text-center text-white-50 pb-5">
                                                    <div class="carousel-item active">
                                                        <p class="fs-24 fst-italic">In the interest of farmers"</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" The theme is really great with
                                                            an amazing customer support."</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" Great! Clean code, clean
                                                            design, easy for customization. Thanks very much! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue</p>
                                    </div>

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email" autofocus placeholder="Enter Email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">


                                                <div class="float-end">

                                                    @if (Route::has('password.request'))
                                                        <a class="text-muted" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}

                                                        </a>
                                                    @endif
                                                </div>
                                                <label class="form-label" for="password">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input id="password" type="password"
                                                           class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                           name="password" required autocomplete="current-password"
                                                           placeholder="Enter password">
                                                    <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">Remember
                                                    me</label>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign
                                                    In
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                    @if (Route::has('register'))
                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Don't have an account ?
                                                <a href="{{ route('register') }}"
                                                   class="fw-semibold text-primary text-decoration-underline">
                                                    Signup</a>
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            xxxxxxx
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{URL::to('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- password-addon init -->
<script src="{{URL::to('/')}}/assets/js/pages/password-addon.init.js"></script>
</body>


</html>
