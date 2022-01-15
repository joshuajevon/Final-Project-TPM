<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link rel="stylesheet" href="{{asset('/css/dash.css')}}"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
        </style>
        <link rel="shortcut icon" type="image/png" href="logo hackathon.svg">
         <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>

    {{-- <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <!-- <i id="java" class='bx bxl-java'></i> -->
                <img id="svg" src="logo hackathon.svg" alt="">
                <div class="logo_name" >Welcome Back</div>
            </div>
            <!-- <i class='bx bx-menu' id="btn" ></i> -->
        </div>
        <ul class="nav_list">
            <li>
                <a href="/register">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Register</span>
                </a>
                <span class="tooltip">Register</span>
            </li>
            <li>
                <a href="/login">
                    <i class='bx bx-wallet bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Login</span>
                </a>
                <span class="tooltip">Login</span>

            </li>

        </ul>
    </div> --}}

    <section id="login">
        <div class="login2">
            <h1>Welcome Back</h1>
                        <form name="formPendaftaran"  method="POST" action="{{ route('login') }}" onsubmit="return validateForm()">
                            @csrf


                                <div class="isi">
                                    <h3>Email</h3>
                                    <i class='bx bx-user bx-sm'></i>
                                    <input id="lol" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Please type your email here...">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror



                                    <h3>Password</h3>
                                    <i class='bx bx-lock bx-sm' ></i>
                                    <input id="lol" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Please type your password here...">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            {{-- <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}


                                <div class="baten">
                                    <button type="submit">Login</button>

                                    @if (Route::has('password.request'))
                                        <a id="dua" href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    @endif
                                </div>
                        </form>
                        <a id="dua" href="/register">Not Registered yet? Register here!</a>
                    </div>
                </section>

                    <script>
                        function validateForm() {
                            if (document.forms["formPendaftaran"]["email"].value == "") {
                                alert("Email Tidak Boleh Kosong");
                                document.forms["formPendaftaran"]["email"].focus();
                                return false;
                            }
                            if (document.forms["formPendaftaran"]["pass"].value == "") {
                                alert("Password is Needed!");
                                document.forms["formPendaftaran"]["pass"].focus();
                                return false;
                            }
                        }
                    </script>


</body>
</html>

