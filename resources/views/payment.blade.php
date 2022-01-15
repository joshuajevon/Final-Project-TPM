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
                <a href="/payment">
                    <i class='bx bx-wallet bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Payment</span>
                </a>
                <span class="tooltip">Payment</span>

            </li>
            <li>
                <a href="/timeline">
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

    {{-- <div class="upload" id="formulir">
        <form action="{{route('uploadData')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="bukti" class="col-md-4 col-form-label text-md-right">{{ __('Upload bukti') }}</label>
                <br>
                <div class="col-md-6">
                    <input id="bukti" type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti" value="{{ old('bukti') }}" required autocomplete="bukti">

                    @error('bukti')
                        <span class="invalid-feedback" role="alert">
                            <div class="alert alert-danger">{{$message}}</div>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div> --}}

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
        <div class="clock"></div>

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
            <p>     Nomor Rekening:</p>
            <p>     Bank:</p>
            <p>     Atas Nama:</p>
            <div class="foto">
                <img src="" alt="">
            </div>
            <p>3. Upload Bukti Pembayaran</p>

            {{-- <div class="upload">
                <i class='bx bxs-file-import'></i>
                <i class='bx bx-low-vision' ></i>
            </div> --}}

            <div class="tombol1" id="formulir">
                <form action="{{route('uploadData')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="bukti" class="col-md-4 col-form-label text-md-right"></label>
                        <br>
                        <div class="col-md-6">
                            <input id="bukti" type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti" value="{{ old('bukti') }}" required autocomplete="bukti">
                        </div>
                    </div>

                    <div >
                        <div class="tombolsubmit">
                            <button type="submit" >
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
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

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="flipclock.js"></script>
    <script type="text/javascript">
        var clock = $('.clock').FlipClock({
            clockFace: 'TwelveHourClock'
        })
    </script>
</body>
</html>
