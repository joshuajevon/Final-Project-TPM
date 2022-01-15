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
{{-- <link rel="stylesheet" href="{{asset('/css/style.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{asset('/css/dash.css')}}"> --}}
<link rel="stylesheet" href="{{asset('/css/view.css')}}">
<link rel="shortcut icon" type="image/png" href="logo hackathon.svg">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
                <a href="viewdataadmin">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Data Leader</span>
                </a>
                <span class="tooltip">Data Leader</span>
            </li>
            <li>
                <a href="viewdatamemberadmin">
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

    {{-- <div class="filter">

        <div class="search">
            <form action="{{url('/cari2')}}" method="GET">

                <input type="text" name="cari2" class="cari2" placeholder="Search" value="{{ old('cari2') }}">
                <i class='bx bx-search' ></i>
            </form>
    </div> --}}

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

        </div>

    </div>
</div>
@endforeach




      {{-- <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Group</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Whatsapp Number</th>
            <th scope="col">Line ID</th>
            <th scope="col">Git Hub</th>
            <th scope="col">Birth Place</th>
            <th scope="col">Birth Date</th>
            <th scope="col">CV</th>
            <th scope="col">Flazz Card / ID Card</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($members as $member )
            {{-- looping --}}
            {{-- <tr>
                <th scope="row">{{ $member->id}}</th>
                <td>{{ $member->namagroup}}</td>
                <td>{{ $member->namemember}}</td>
                <td>{{ $member->email1}}</td>
                <td>{{ $member->whatsapp1}}</td>
                <td>{{ $member->line1}}</td>
                <td>{{$member->github1}}</td>
                <td>{{$member->place1}}</td>
                <td>{{$member->date1}}</td>
                <td><img width="300px" src="{{ url('/data_file/'.$member->cv1) }}"></td>
                <td><img width="300px" src="{{ url('/data_file/'.$member->card1) }}"></td>
            </tr>
            @endforeach
        </tbody>
      </table> --}}


</body>
</html>
