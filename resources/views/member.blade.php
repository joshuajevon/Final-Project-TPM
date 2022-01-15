{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <h1>Add Your Member</h1>

    <div id="formulir">
        <form action="{{route('insertMember')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-header">{{ __('Informasi Member') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('member') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="namemember" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                        <div class="col-md-6">
                            <input id="namemember" type="text" class="form-control @error('namemember') is-invalid @enderror" name="namemember" value="{{ old('namemember') }}" required autocomplete="namemember" autofocus placeholder="Input Name">

                            @error('namemember')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email1" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email1" type="email1" class="form-control @error('email1') is-invalid @enderror" name="email1" value="{{ old('email1') }}" required autocomplete="email1" placeholder="Input Email">

                            @error('email1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="whatsapp1" class="col-md-4 col-form-label text-md-right">{{ __('Whatssapp Number') }}</label>

                        <div class="col-md-6">
                            <input id="whatsapp1" type="numeric" class="form-control @error('whatsapp1') is-invalid @enderror" name="whatsapp1" value="{{ old('whatsapp1') }}" required autocomplete="whatsapp1" placeholder="Input Number">

                            @error('whatsapp1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="line1" class="col-md-4 col-form-label text-md-right">{{ __('Line ID') }}</label>

                        <div class="col-md-6">
                            <input id="line1" type="text" class="form-control @error('line1') is-invalid @enderror" name="line1" value="{{ old('line1') }}" required autocomplete="line1" placeholder="Input Line ID">

                            @error('line1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="github1" class="col-md-4 col-form-label text-md-right">{{ __('Github ID') }}</label>

                        <div class="col-md-6">
                            <input id="github1" type="text" class="form-control @error('github1') is-invalid @enderror" name="github1" value="{{ old('github1') }}" required autocomplete="github1" placeholder="Input Github">

                            @error('github1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                        <div class="col-md-6">
                            <input id="place1" type="text" class="form-control @error('place1') is-invalid @enderror" name="place1" value="{{ old('place1') }}" required autocomplete="place1" placeholder="Input Birth Place">

                            @error('place1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date1" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ old('date1') }}" required autocomplete="date1" placeholder="Input Birth Date">

                            @error('date1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cv1" class="col-md-4 col-form-label text-md-right">{{ __('Upload CV') }}</label>

                        <div class="col-md-6">
                            <input id="cv1" type="file" class="form-control @error('cv1') is-invalid @enderror" name="cv1" value="{{ old('cv1') }}" required autocomplete="cv1">

                            @error('cv1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="card1" class="col-md-4 col-form-label text-md-right">{{ __('Upload Flazz Card (Binusian)') }}</label>

                        <div class="col-md-6">
                            <input id="card1" type="file" class="form-control @error('card1') is-invalid @enderror" name="card1" value="{{ old('card1') }}" required autocomplete="card1">

                            @error('card1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>


            <button type="submit" class="btn btn-info">Submit</button>

            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> --}}


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
         <link rel="shortcut icon" type="image/png" href="logo hackathon.svg">
         {{-- <link rel="stylesheet" href="{{asset('/css/dash.css')}}"> --}}
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
                <a href="/dashboard">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Back</span>
                </a>
                <span class="tooltip">Back</span>
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
                <h1>Member Information</h1>

                        <form method="post" action="{{ route('insertMember') }}" enctype="multipart/form-data">
                            @csrf

                                        <div class="form-line">
                                            <p>Full Name</p>
                                            <div>
                                                <img src="../assets/register/icon/full_name.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="namemember" type="text" class="form-control @error('namemember') is-invalid @enderror" name="namemember" value="{{ old('namemember') }}" required autocomplete="namemember" autofocus placeholder="Please type your full name here...">
                                                        @error('namemember')
                                                        <span class="invalid-feedback" role="alert">
                                                            <div class="alert alert-danger">{{$message}}</div>
                                                        </span>
                                                    @enderror

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Email</p>
                                            <div>
                                                <img src="../assets/register/icon/email.png" alt="">
                                                <div>
                                                    <div>
                                                        <input id="email1" type="text" class="form-control @error('email1') is-invalid @enderror" name="email1" value="{{ old('email1') }}" required autocomplete="email1" placeholder="Please type your email here...">

                                                        @error('email1')
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
                                                        <input id="whatsapp1" type="text" class="form-control @error('whatsapp1') is-invalid @enderror" name="whatsapp1" value="{{ old('whatsapp1') }}" required autocomplete="whatsapp1" placeholder="Please type your Whatsapp number here...">

                                            @error('whatsapp1')
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
                                                        <input id="line1" type="text" class="form-control @error('line1') is-invalid @enderror" name="line1" value="{{ old('line1') }}" required autocomplete="line1" placeholder="Please type your Line ID here...">

                                            @error('line1')
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
                                                        <input id="github1" type="text" class="form-control @error('github1') is-invalid @enderror" name="github1" value="{{ old('github1') }}" required autocomplete="github1" placeholder="Please type your Github here...">

                                                        @error('github1')
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
                                                    <div>
                                                        <input id="place1" type="text" class="form-control @error('place1') is-invalid @enderror" name="place1" value="{{ old('place1') }}" required autocomplete="place1" placeholder="Please type your place of birth here...">

                                                        @error('place1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <div class="alert alert-danger">{{$message}}</div>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-line">
                                            <p>Date of Birth</p>
                                            <div>
                                                <img src="../assets/register/icon/date of birth.png" alt="">
                                                <div>
                                                    <div class="tanggal">
                                                        <input id="date" type="date" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ old('date1') }}" required autocomplete="date1"  placeholder="Please type your date of birth here...">

                                                        @error('date1')
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
                                                        <input type="file" class="form-control @error('cv1') is-invalid @enderror" name="cv1" value="{{ old('cv1') }}" required autocomplete="cv1" id="file-upload1" placeholder="Please type your date of birth here...">

                                                    </div>
                                                    <p class="file-format">&#9888; File format pdf, jpg, jpeg, or png</p>

                                            @error('cv1')
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
                                                        <input type="file" class="form-control @error('card1') is-invalid @enderror" name="card1" value="{{ old('card1') }}" required autocomplete="card1" id="file-upload2" placeholder="Please type your date of birth here...">
                                                    </div>
                                                    <p class="file-format">&#9888; File format pdf, jpg, jpeg, or png</p>

                                                    @error('card1')
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

