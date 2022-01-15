<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Damion&family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="{{asset('/css/register.css')}}">

         <link rel="stylesheet" href="{{asset('/css/dash.css')}}">
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
 <div class="main">
        <div class="card">
            <div class="left">
                <div class="left-container">
                <h1>Register</h1>
                <img class="rocket" src="../assets/register/rocket.png" alt="">
                <img class="progress" src="../assets/register/team/progress-1.png" alt="">
                <p>Already have an account? <a href="/login">Log in</a></p>
                </div>
            </div>
            <div class="right">
                <h1>Team Information</h1>

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf


                                <div class="form-line">
                                    <p>Team Name</p>
                                    <div>
                                        <img src="../assets/register/icon/team_name.png" alt="">

                                            <div>
                                                <input id="namagroup" type="text" class="form-control @error('namagroup') is-invalid @enderror" name="namagroup" value="{{ old('namagroup') }}" required autocomplete="namagroup" autofocus placeholder="Please type your team name here...">

                                                @error('namagroup')
                                                    <span class="invalid-feedback" role="alert">
                                                        <div class="alert alert-danger">{{$message}}</div>
                                                    </span>
                                                @enderror
                                            </div>

                                    </div>
                                </div>

                                <div class="form-line">
                                    <p>Password</p>
                                    <div>
                                        <img src="../assets/register/icon/password.png" alt="">
                                        <div>
                                            <div>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="new-password" placeholder="Please type your password here...">
                                                <i class="far fa-eye" id="togglePassword"></i>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <div class="alert alert-danger">{{$message}}</div>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-line">
                                    <p>Confirm</p>
                                    <div>
                                        <img id="confirm" src="../assets/register/icon/confirm.png" alt="">
                                        <div>
                                            <div>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password-confirm') }}" required autocomplete="new-password" placeholder="Please type your confirmed password here...">
                                                <i class="far fa-eye" id="togglePassword"></i>
                                            </div>
                                            <p class="error-message valid">&#9888; Please make sure your password match.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-radio">
                                    <p>Status</p>
                                    <div>
                                        <div class="select">
                                            {{-- <input type="radio" name="binus" id="binus" class="form-select @error('binus') is-invalid @enderror" value="{{ old('binus') }}">
                                            <label for="">Binusian</label>
                                            <br>
                                            <input type="radio" name="binus" id="binus" class="form-select @error('binus') is-invalid @enderror" value="{{ old('binus') }}">
                                            <label for="">Non-binusian</label> --}}
                                            <select name="binus" id="binus" class="form-select @error('binus') is-invalid @enderror" value="{{ old('binus') }}">
                                                <option selected></option>
                                                <option>Binusian</option>
                                                <option>Non Binusian</option>
                                            </select>
                                        </div>
                                    </div>


                                    @error('binus')
                                        <span class="invalid-feedback" role="alert">
                                            <div class="alert alert-danger">{{$message}}</div>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <br>
                                <h1>Leader Information</h1>

                                        <div class="form-line">
                                            <p>Full Name</p>
                                            <div>
                                                <img src="../assets/register/icon/full_name.png" alt="">
                                                <div>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Please type your full name here...">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <div class="alert alert-danger">{{$message}}</div>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Email</p>
                                            <div>
                                                <img src="../assets/register/icon/email.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Please type your email here...">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <div class="alert alert-danger">{{$message}}</div>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Whatsapp Number</p>
                                            <div>
                                                <img src="../assets/register/icon/whatsapp.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp" placeholder="Please type your Whatsapp number here...">

                                            @error('whatsapp')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-line">
                                            <p>Line ID</p>
                                            <div>
                                                <img id="confirm" src="../assets/register/icon/line.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{ old('line') }}" required autocomplete="line" placeholder="Please type your Line ID here...">

                                            @error('line')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Github</p>
                                            <div>
                                                <img id="confirm" src="../assets/register/icon/github.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="github" type="text" class="form-control @error('github') is-invalid @enderror" name="github" value="{{ old('github') }}" required autocomplete="github" placeholder="Please type your Github here...">

                                                        @error('github')
                                                            <span class="invalid-feedback" role="alert">
                                                                <div class="alert alert-danger">{{$message}}</div>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-line">
                                            <p>Place of Birth</p>
                                            <div>
                                                <img src="../assets/register/icon/place of birth.png" alt="">
                                                <div>

                                                        <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}" required autocomplete="place" placeholder="Please type your place of birth here...">

                                                        @error('place')
                                                            <span class="invalid-feedback" role="alert">
                                                                <div class="alert alert-danger">{{$message}}</div>
                                                            </span>
                                                        @enderror

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Date of Birth</p>
                                            <div>
                                                <img src="../assets/register/icon/date of birth.png" alt="">
                                                <div>
                                                    <div class="tanggal">
                                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" placeholder="Please type your date of birth here...">

                                                        @error('date')
                                                            <span class="invalid-feedback" role="alert">
                                                                <div class="alert alert-danger">{{$message}}</div>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line upload">
                                            <p>CV</p>
                                            <div>
                                                <img src="../assets/register/icon/cv.png" alt="">
                                                <div>
                                                    <div>
                                                        <label for="file-upload1" class="custom-file-upload">
                                                            <img src="../assets/register/icon/upload.png" alt="">
                                                            <img src="../assets/register/icon/preview.png" alt="">
                                                        </label>
                                                        <input type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" required autocomplete="cv" id="file-upload1" placeholder="Please type your date of birth here...">

                                                    </div>
                                                    <p class="file-format">&#9888; File format pdf, jpg, jpeg, or png</p>

                                                @error('cv')
                                                     <span class="invalid-feedback" role="alert">
                                                        <div class="alert alert-danger">{{$message}}</div>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line upload">
                                            <p>Card</p>
                                            <div>
                                                <img src="../assets/register/icon/binus flazz.png" alt="">
                                                <div>
                                                    <div>
                                                        <label for="file-upload2" class="custom-file-upload">
                                                            <img src="../assets/register/icon/upload.png" alt="">
                                                            <img src="../assets/register/icon/preview.png" alt="">
                                                        </label>
                                                        <input type="file" class="form-control @error('card') is-invalid @enderror" name="card" value="{{ old('card') }}" required autocomplete="card" id="file-upload2" placeholder="Please type your date of birth here...">
                                                    </div>
                                                    <p class="file-format">&#9888; File format pdf, jpg, jpeg, or png</p>

                                                    @error('card')
                                                        <span class="invalid-feedback" role="alert">
                                                        <div class="alert alert-danger">{{$message}}</div>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="continue">
                                            <div>
                                                <button type="submit" class="tombolregis">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>

                        </form>
</body>
</html>

