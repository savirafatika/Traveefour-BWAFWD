<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/styles/css/main.css') }}">
</head>

<body>

    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We explore the new <br>
                        life much better</h1>
                    <img src="{{ url('frontend/images/login-image.png') }}" class="w-75 d-none d-sm-flex">
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{ route('home') }}"><img src="{{ url('frontend/images/logo.png') }}"
                                        class="w-50 mb-4"></a>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                                <button type="submit" class="btn btn-login w-100">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                <p class="text-center mt-4">
                                    <a class="btn btn-link"
                                        href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </p>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
</body>

</html>
