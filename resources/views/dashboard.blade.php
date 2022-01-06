<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

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
      </nav>

      <h1>DASHBOARD</h1>
      <h2>DATA LEADER</h2>


    <a id="nama" href="" >Nama Grup : {{ Auth::user()->namagroup }}</a>
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
        <form action="{{route('viewdataleader')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg">View</button>
        </form>
    </a>
    <br>
    <a id="nama" href="" > Card :
        <form action="{{route('viewdataleadercard')}}">
            @csrf
            <button type="submit" class="btn btn-secondary btn-lg">View</button>
        </form>
        {{-- Flazz Card : {{ Auth::user()->card }} --}}

    </a>



      {{-- <a id="nama" href="" >Nama Grup : {{ Member::member()->namemember }}</a>
    <br>
    <a id="nama" href="" >Email : {{ Route::member()->email1 }}</a>
    <br>
    <a id="nama" href="" >Whatsapp Number : {{ Route::member()->whatsapp1 }}</a>
    <br>
    <a id="nama" href="" >Line ID : {{ Route::member()->line1 }}</a>
    <br>
    <a id="nama" href="" >Git Hub : {{ Route::member()->github1 }}</a>
    <br>
    <a id="nama" href="" >Birth Place : {{ Route::member()->place1 }}</a>
    <br>
    <a id="nama" href="" >Birth Date : {{ Route::member()->date1 }}</a>
    <br>
    <a id="nama" href="" >CV : {{ Route::member()->cv1 }}</a>
    <br>
    <a id="nama" href="" >Flazz Card : {{ Route::member()->card1 }}</a> --}}



    <br>
      <h1>Data Member</h1>
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
            <tr>
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
      </table>

      <form action="{{route('member')}}">
        @csrf
        <button type="submit" class="btn btn-secondary btn-lg">+Add Member</button>
    </form>
<br>
    <h1>Contact Person</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
