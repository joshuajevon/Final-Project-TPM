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
            <form action="{{url('/cari1')}}" method="GET">
                <input type="text" name="cari1" class="cari1" placeholder="Search" value="{{ old('cari1') }}">
                <i class='bx bx-search' ></i>
            </form>
    </div> --}}

    @foreach ($users as $user)
    <div class="container">
        <h1 class="lead">   {{$user->namagroup}}</h1>
    <div class="milih">
        <div class="baten">
            <div class="banten">
        <button>Leader</button>
                </div>
        <div class="konten">
            <i class='bx bx-user bx-sm' ></i>
            <h4 id="ini"> {{$user->name}}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-been-here bx-sm' ></i>
            <h4 id="ini">{{ $user->place }}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-calendar bx-sm' ></i>
            <h4 id="ini">{{ $user->date }}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-mail-send bx-sm' ></i>
            <h4 id="ini">{{ $user->email }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-whatsapp bx-sm' ></i>
            <h4 id="ini">{{ $user->whatsapp }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-instagram bx-sm' ></i>
            <h4 id="ini">{{ $user->line }}</h4>
        </div>
        <div class="konten">
            <i class='bx bxl-github bx-sm' ></i>
            <h4 id="ini">{{ $user->github }}</h4>
        </div>
        <div class="konten">
            <i class='bx bx-file bx-sm' ></i>
            <a id="tombol"class='bx bx-low-vision bx-sm' href="/viewdataleader" ></a>


        </div>
        <div class="konten">
            <i class='bx bx-photo-album bx-sm' ></i>
            <a id="tombol"class='bx bx-low-vision bx-sm' href="/viewdataleadercard" ></a>
        </div>
        </div>

    </div>
</div>
@endforeach
</div>

      {{-- <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Group Name</th>
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
            @foreach ($users as $user)
            {{-- looping --}}
            {{-- <tr>
                <td>
                    {{$user->namagroup}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->whatsapp }}</td>
                <td>{{ $user->line }}</td>
                <td>{{ $user->github }}</td>
                <td>{{ $user->place }}</td>
                <td>{{ $user->date }}</td>
                <td> --}}

                    {{-- <form action="{{route('viewdataleader')}}">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-lg">View</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('viewdataleadercard')}}">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-lg">View</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table> --}}


</body>
</html>
