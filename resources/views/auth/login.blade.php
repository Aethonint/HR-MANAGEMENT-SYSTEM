<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Hostar - Login</title>
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('admin/assets/css/common.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/assets/css/pages/extra_pages.css')}}" rel="stylesheet"/>
</head>
<body>
  <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- LOGIN FORM -->
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf

                    <span class="login100-form-title p-b-45">Login</span>

                    <!-- EMAIL -->
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email"
                               value="{{ old('email') }}" required autofocus autocomplete="username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        @error('email')
                            <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" id="password" type="password" name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        @error('password')
                            <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- REMEMBER & FORGOT -->
                    <div class="flex-sb-m w-full p-t-15 p-b-20">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" id="remember_me" type="checkbox" name="remember">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <div>
                                <a href="{{ route('password.request') }}" class="txt1">Forgot Password?</a>
                            </div>
                        @endif
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Login</button>
                    </div>

                    <!-- SOCIAL LINKS (optional) -->
                    
                </form>

                <div class="login100-more" style="background-image: url('../../assets/images/pages/bg-01.png');">
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('admin/assets/js/common.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/examples/pages.js')}}"></script>
</body>
</html>
