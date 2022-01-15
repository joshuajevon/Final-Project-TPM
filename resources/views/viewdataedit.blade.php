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
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/view.css')}}">
<link rel="stylesheet" href="{{asset('/css/flipclock.css')}}">
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
                <a href="viewdataeditleader">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Data Leader</span>
                </a>
                <span class="tooltip">Data Leader</span>
            </li>
            <li>
                <a href="viewdataedit">
                    <i class='bx bx-user bx-sm bx-tada-hover'></i>
                    <span class="links_name">Data Member</span>
                </a>
                <span class="tooltip">Data Member</span>

            </li>

            <li>
                <a href="admin#dua">
                    <i class='bx bx-log-out  bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Back</span>
                </a>
                <span class="tooltip">Back</span>

            </li>
        </ul>
    </div>

    @foreach ($members as $member)
    <div class="container">
        <h1 class="lead">   {{$member->namagroup}}</h1>
    <div class="milih">
        <div class="baten">
            <div class="banten">
        <button>Member</button>
                </div>
        <div class="konten">
            <i class='bx bx-user bx-sm' ></i>
            <h4 id="ini"> {{$member->namemember}}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-been-here bx-sm' ></i>
            <h4 id="ini">{{ $member->place1 }}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-calendar bx-sm' ></i>
            <h4 id="ini">{{$member->date1 }}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-mail-send bx-sm' ></i>
            <h4 id="ini">{{$member->email1 }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-whatsapp bx-sm' ></i>
            <h4 id="ini">{{ $member->whatsapp1 }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-instagram bx-sm' ></i>
            <h4 id="ini">{{$member->line1 }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-github bx-sm' ></i>
            <h4 id="ini">{{ $member->github1 }}</h4>
        </div>
        <div class="konten33">
            <i id="logogambar" class='bx bx-file bx-sm' ></i>
            <img class="gambar" width="300px" src="{{ url('/data_file/'.$member->cv1) }}">


        </div>
        <div class="konten33">
            <i id="logogambar" class='bx bx-photo-album bx-sm' ></i>
            <img class="gambar" width="300px" src="{{ url('/data_file/'.$member->card1) }}">
        </div>
        <div class="konten">
            <a id="putih"class='bx bx-pencil bx-sm tada-hover'  ></a>

            <a href="{{route('getDataById', ['id' => $member -> id])}}">
                <button id="tomboledit" type="submit" class='bx bx-file-blank bx-sm' style='color:#ffffff' ></button>
            </a>
        </div>
        </div>

    </div>
</div>
@endforeach

</body>
</html>
