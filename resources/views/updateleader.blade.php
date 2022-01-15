<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
    </style>

    <link rel="stylesheet" href="{{asset('/css/edit.css')}}">
    <link rel="shortcut icon" type="image/png" href="logo hackathon.svg">
</head>
<body>

    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <!-- <i id="java" class='bx bxl-java'></i> -->
                <img id="svg" src="logo hackathon.svg" alt="">
                <div class="logo_name">Welcome Back</div>
            </div>
            <!-- <i class='bx bx-menu' id="btn" ></i> -->
        </div>
        <ul class="nav_list">
            <li>
                <a href="/viewdataeditleader">
                    <i class='bx bx-log-out  bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Back</span>
                </a>
                <span class="tooltip">Back</span>

            </li>
        </ul>
    </div>

    <div class="container">
    <h1>Edit</h1>
<div class="milih">
    <div class="baten">
        <div class="banten">
    <button>Leader</button>
            </div>

                        <form method="POST" action="{{route('updateleader', ['id' => $user -> id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf


                                        <div class="konten">
                                            <i class='bx bx-user bx-sm' ></i>
                                            <input id="kotak" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bx-been-here bx-sm' ></i>
                                            <input id="kotak" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ $user->place }}" required autocomplete="place">

                                            @error('place')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bx-calendar bx-sm' ></i>
                                            <input id="kotak" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $user->date }}" required autocomplete="date">

                                            @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="konten">
                                            <i class='bx bx-mail-send bx-sm' ></i>
                                            <input id="kotak" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bxl-whatsapp bx-sm' ></i>
                                            <input id="kotak" type="numeric" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $user->whatsapp }}" required autocomplete="whatsapp">

                                            @error('whatsapp')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bxl-instagram bx-sm' ></i>
                                            <input id="kotak" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{$user->line}}" required autocomplete="line">

                                            @error('line')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bxl-github bx-sm' ></i>
                                            <input id="kotak" type="text" class="form-control @error('github') is-invalid @enderror" name="github" value="{{ $user->github }}" required autocomplete="github">

                                            @error('github')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>



                                        <div class="konten">

                                            <i class='bx bx-file bx-sm' ></i>
                                            <input id="choosefile" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ $user->cv }}" required autocomplete="cv">

                                            @error('cv')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten">
                                            <i class='bx bx-photo-album bx-sm'></i>
                                            <input id="choosefile" type="file" class="form-control @error('card') is-invalid @enderror" name="card" value="{{ $user->card }}" required autocomplete="card">

                                            @error('card')
                                                <span class="invalid-feedback" role="alert">
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="konten2">
                                            <button type="submit" >Save</button>
                                        </div>

                        </form>
                    </form>

                </div>
            </div>
        </div>



</body>
</html>


