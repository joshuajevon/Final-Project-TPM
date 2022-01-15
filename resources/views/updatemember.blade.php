<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
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
                <a href="/viewdataedit">
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
        <button>Member</button>
                </div>
        <form action="{{route('updatemember', ['id' => $member -> id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')



                <form method="POST" action="{{ route('member') }}">
                    @csrf



                        <div class="konten">
                            <i class='bx bx-user bx-sm' ></i>
                            <input id="kotak" type="text" class="form-control @error('namemember') is-invalid @enderror" name="namemember" value="{{ $member->namemember }}" required autocomplete="namemember" autofocus placeholder="Input Name">

                            @error('namemember')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>

                        <div class="konten">
                            <i class='bx bx-been-here bx-sm' ></i>
                            <input id="kotak" type="text" class="form-control @error('place1') is-invalid @enderror" name="place1" value="{{ $member->place1 }}" required autocomplete="place1" placeholder="Input Birth Place">

                            @error('place1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>



                        <div class="konten">
                            <i class='bx bx-calendar bx-sm' ></i>
                            <input id="kotak" type="date" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ $member->date1 }}" required autocomplete="date1" placeholder="Input Birth Date">

                            @error('date1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>


                        <div class="konten">
                            <i class='bx bx-mail-send bx-sm' ></i>
                            <input id="kotak" type="email1" class="form-control @error('email1') is-invalid @enderror" name="email1" value="{{ $member->email1 }}" required autocomplete="email1" placeholder="Input Email">

                            @error('email1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>



                        <div class="konten">
                            <i class='bx bxl-whatsapp bx-sm' ></i>
                            <input id="kotak" type="numeric" class="form-control @error('whatsapp1') is-invalid @enderror" name="whatsapp1" value="{{ $member->whatsapp1 }}" required autocomplete="whatsapp1" placeholder="Input Number">

                            @error('whatsapp1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>



                        <div class="konten">
                            <i class='bx bxl-instagram bx-sm' ></i>
                            <input id="kotak" type="text" class="form-control @error('line1') is-invalid @enderror" name="line1" value="{{ $member->line1 }}" required autocomplete="line1" placeholder="Input Line ID">

                            @error('line1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>



                        <div class="konten">
                            <i class='bx bxl-github bx-sm' ></i>
                            <input id="kotak" type="text" class="form-control @error('github1') is-invalid @enderror" name="github1" value="{{$member->github1 }}" required autocomplete="github1" placeholder="Input Github">

                            @error('github1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>







                        <div class="konten">
                            <i class='bx bx-file bx-sm' ></i>
                            <input id="choosefile" type="file" class="form-control @error('cv1') is-invalid @enderror" name="cv1" value="{{ $member->cv1 }}" required autocomplete="cv1">

                            @error('cv1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>



                        <div class="konten">
                            <i class='bx bx-photo-album bx-sm' ></i>
                            <input id="choosefile" type="file" class="form-control @error('card1') is-invalid @enderror" name="card1" value="{{ $member->card1 }}" required autocomplete="card1">

                            @error('card1')
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
