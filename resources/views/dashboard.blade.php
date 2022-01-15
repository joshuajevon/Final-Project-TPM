<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/dash.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
        </style>
        <link rel="stylesheet" href="css/flipdown.css">
        <script> src="js/flipdown.js"</script>
        <link rel="stylesheet" href="{{asset('/css/flipclock.css')}}">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hackaton</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/payment">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/timeline">Timeline</a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   Log Out
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Click') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </div>
        </div>
      </nav> --}}

      <div class="sidebar">
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
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#dua">
                    <i class='bx bx-wallet bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Payment</span>
                </a>
                <span class="tooltip">Payment</span>

            </li>
            <li>
                <a href="#jemi">
                    <i class='bx bx-time bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Timeline</span>
                </a>
                <span class="tooltip">Timeline</span>

            </li>
            <li>
                <form id="logout-form"action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out bx-sm bx-tada-hover' ></i>
                        <span class="links_name">Log out</span>
                    </a>
                    <span class="tooltip">Log out</span>
                </form>
            </li>
        </ul>
    </div>

      {{-- <h1>DASHBOARD</h1>
      <h2>DATA LEADER</h2>

      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
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
            {{-- looping --}}
            {{-- <tr>
                <td>{{ Auth::user()->name}}</td>
                <td>{{ Auth::user()->email }}</td>
                <td>{{ Auth::user()->whatsapp }}</td>
                <td>{{ Auth::user()->line }}</td>
                <td>{{ Auth::user()->github }}</td>
                <td>{{ Auth::user()->place }}</td>
                <td>{{ Auth::user()->date }}</td>
                <td>
                    {{-- CV : {{ Auth::user()->cv }} --}}
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
        </tbody>
      </table> --}}

       <div id="satu" class="container">
        <div class="baru">
        <h1  class="babi">Dashboard</h1>
        <h1 class="lol">Group Name</h1>
        </div>

        <div class="container2">
            <h1>Leader Information</h1>
        <div class="milih">
            <div class="baten">
            <div class="konten">
                <i class='bx bx-user bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->name}}</h4>
            </div>
            <div class="konten">
                <i class='bx bx-been-here bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->place }}</h4>
            </div>
            <div class="konten">
                <i class='bx bx-calendar bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->date }}</h4>
            </div>
            <div class="konten">
                <i class='bx bx-mail-send bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->email }}</h4>
            </div>
            <div class="konten">
                <i class='bx bxl-whatsapp bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->whatsapp }}</h4>
            </div>
            <div class="konten">
                <i class='bx bxl-instagram bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->line }}</h4>
            </div>
            <div class="konten">
                <i class='bx bxl-github bx-sm' ></i>
                <h4 id="ini">{{ Auth::user()->github }}</h4>
            </div>
            <div class="konten">

                {{-- <i  id="ini"class='bx bx-low-vision bx-sm' ></i> --}}
                <form action="{{route('viewdataleader')}}">
                    @csrf
                    <i class='bx bx-file bx-sm' ></i>
                    <button id="ono" type="submit" class="bx bx-low-vision bx-sm"></button>
                </form>
            </div>
            <div class="konten">

                {{-- <i id="ini"class='bx bx-low-vision bx-sm' ></i> --}}
                <form action="{{route('viewdataleadercard')}}">
                    @csrf
                    <i class='bx bx-photo-album bx-sm' ></i>
                    <button id="ono" type="submit" class="bx bx-low-vision bx-sm"></button>
                </form>
            </div>
            {{-- <button class="baten2">New Member</button> --}}

            <form action="{{route('member')}}">
                @csrf
                <button type="submit" class="baten2">New Member</button>
            </form>

            </div>
        </div>
    </div>

    {{-- <a id="nama" href="" >Nama Grup : {{ Auth::user()->namagroup }}</a>
    <br>
    <a id="nama" href="" >Email : {{ Auth::user()->email }}</a>
    <br>
    <a id="nama" href="" >Whatsapp Number : {{ Auth::user()->whatsapp }}</a>
    <br>
    <a id="nama" href="" >Line ID : {{ Auth::user()->line }}</a>
    <br>
    <a id="nama" href="" >Git Hub : {{ Auth::user()->github }}</a>
    <br>
    <a id="nama" href="" >Birth Place : {{ Auth::user()->place }}</a>
    <br>
    <a id="nama" href="" >Birth Date : {{ Auth::user()->date }}</a>
    <br>
    <a id="nama" href="" > CV :
        {{-- CV : {{ Auth::user()->cv }} --}}
        {{-- <form action="{{route('viewdataleader')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg">View</button>
        </form>
    </a>
    <br>
    <a id="nama" href="" > Card :
        <form action="{{route('viewdataleadercard')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg">View</button>
        </form> --}}
        {{-- Flazz Card : {{ Auth::user()->card }} --}}

    {{-- </a>  --}}




      {{-- <h1>Data Member</h1>
      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
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

<div class="container33">
    @foreach ($members as $member )
    <h1>Member Information</h1>
    <div class="milih3">
        <div class="baten4">
        <div class="konten33">
            <i class='bx bx-user bx-sm' ></i>
            <h4 id="ini">{{ $member->namemember}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bx-been-here bx-sm' ></i>
            <h4 id="ini">{{$member->place1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bx-calendar bx-sm' ></i>
            <h4 id="ini">{{$member->date1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bx-mail-send bx-sm' ></i>
            <h4 id="ini">{{ $member->email1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bxl-whatsapp bx-sm' ></i>
            <h4 id="ini">{{ $member->whatsapp1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bxl-instagram bx-sm' ></i>
            <h4 id="ini">{{ $member->line1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bxl-github bx-sm' ></i>
            <h4 id="ini">{{$member->github1}}</h4>
        </div>
        <div class="konten33">
            <i class='bx bx-file bx-sm' ></i>
            {{-- <i  id="ini"class='bx bx-low-vision bx-sm' ></i> --}}
            <img id="ini" class='bx bx-low-vision bx-sm' width="300px" src="{{ url('/data_file/'.$member->cv1) }}">
        </div>
        <div class="konten33">
            <i class='bx bx-photo-album bx-sm' ></i>
            {{-- <i id="ini"class='bx bx-low-vision bx-sm' ></i> --}}
            <img id="ini" class='bx bx-low-vision bx-sm' width="300px" src="{{ url('/data_file/'.$member->card1) }}">
        </div>

        </div>
    </div>
    @endforeach
</div>
<br>
<div class="kontak">
    <img id="kontak" src="contact person.svg" alt="">
</div>
<br>
<div id="dua"class="payment">
    <h1 class="pay">Payment</h1>
    <h3>Registration Period</h3>
    <h4>June 10 2022, July 10 2022</h4>
    <div class="bird">
        <h1>Early  Bird</h1>
        <div class="binus">
        <a id="binus" href="#">Binussian</a>
        <a id="binus" href="#">Rp 85.000</a>
        </div>
        <div class="non-binus">
        <a id="binus" href="#">Non-Binussian</a>
        <a id="binus" href="#">Rp 100.000</a>

        </div>
    </div>
    <div class="clock">
        <div class="bgimg">
            <div class="middle">
              <h1>Countdown</h1>
              <hr>
          <p id="demo"></p>
            </div>
          </div>
          <!-- Display the countdown timer in an element -->
    </div>
    <div class="form">
        <h1>Payment Instruction</h1>
        <div class="cara">
        <p>1. Periode Registrasi</p>
        <p>     Early Bird(9 Juni 2022 - 30 Juni 2022):</p>
        <p>     Binusian: Rp. 85.000,-</p>
        <p>     Non-Binusian: Rp. 100.000<br><br></p>
        <p>     General (1 Juli 2022 - 10 Juli 2022);</p>
        <p>     Binusian: Rp. 100.000,-</p>
        <p>     Non-Binusian: Rp. 100.000<br><br></p>
        <p>2. Pembayaran Biaya</p>
        <p>     Nomor Rekening:7123456789</p>
        <p>     Bank:BCA</p>
        <p>     Atas Nama:John Doe</p>
        <div class="foto">
            <img src="qr.svg" alt="">
        </div>
        <p>3. Upload Bukti Pembayaran</p>

        {{-- <div class="upload">
            <i class='bx bxs-file-import'></i>
            <i class='bx bx-low-vision' ></i>
        </div> --}}

        <div class="tombol1" id="formulir">
            <form action="{{route('uploadData')}}" method="post" enctype="multipart/form-data">
                @csrf


                    <div class="upload">
                        <label for="file-upload3">
                            <i id="ana" class='bx bxs-file-import bx-sm'  ></i>
                        </label>
                        <input id="file-upload3" type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti" value="{{ old('bukti') }}" required autocomplete="bukti">
                        <button id="ana" type="submit" class='bx bx-send bx-sm' style='color:#ffffff'></button>
                    </div>

                            {{-- <button type="submit" class='bx bx-send'></button> --}}

                            {{-- <button type="submit" class="">
                                {{ __('Submit') }}
                            </button> --}}


            </form>
        </div>


        <h4>Batas maksimum file 5 MB dalam bentuk JPG,JPEG,PNG,atau PDF.</h4>
        <p><br>4. Calon peserta yang telah mengupload bukti pembayaran akan memiliki<br>status Pending dan akan diverifikasi oleh panitia dalam rentang waktu 24 jam.<br>Apabila calon peserta belum diverifikasi dalam rentang waktu tersebut, calon,<br> peserta dapat menghubungi panitia melalui Contact Person.</p>
        <br>
        {{-- <h4>Verifikasi Status</h4>
        @foreach ($users as $user )
            {{ $user->verify}}
        @endforeach --}}
    </div>
    </div>
</div>

<div id="jemi" class="imej">
    <h1>Timeline</h1>
<img  src="timeline.png" alt="">
</div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("7 20, 2022 23:59:0").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
</body>
</html>
