<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/backend/css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="{{ route('adminlogincheck') }}" method="POST">
                @csrf
                <h1>Login</h1>

                <div class="input-box">
                    <div>
                    @if($errors->any())
                        <span style="color:#FF0000;" role="alert">
                           {{ $errors->first() }}
                        </span>
                    @endif
                </div>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="login" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box register">
            <form action="#">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                    <i class='bx bxs-envelope' ></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/backend/js/login.js') }}"></script>
</body>
</html>
