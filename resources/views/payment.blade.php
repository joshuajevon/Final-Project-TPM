<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hackaton</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/payment">Payment</a>
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
      </nav>

      <h1>Payment</h1>

      -	Periode registrasi
      <br>
    Penjelasan mengenai biaya pendaftaran ( early Bird dan General ). Untuk general masih dibedain harga binusian dan Non-binusian
    <br>
    <br>
  -	Pembayaran Biaya Pendaftaran
  Informasi Rekening pembayaran yang terdiri dari:
  <br>
  ●	Nomor Rekening = 1234567890123
  <br>
  ●	Bank = ABC
  <br>
  ●	Atas nama = sapa ya
  <br>
  ●	QR Code Rekening =
  <br><br>
  -	Upload Bukti Pembayaran
  <br>
  ●	Ketentuan Upload Bukti Pembayaran
    <div id="formulir">
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
    </div>


  <br>
  -	Verifikasi Pembayaran
  <br>
●	Ketentuan Verifikasi Pembayaran.
<br>
-	Early Bird Offer
<br>
Include: Waktu yang tersisa untuk Early Bird dalam bentuk countdown.


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
