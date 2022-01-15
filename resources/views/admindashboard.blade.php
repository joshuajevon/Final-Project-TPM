<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

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
                <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/adminparticipant">Participant</a>
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
                <div class="logo_name">Welcome Back</div>
            </div>
            <!-- <i class='bx bx-menu' id="btn" ></i> -->
        </div>
        <ul class="nav_list">
            <li>
                <a href="#satu">
                    <i class='bx bx-box bx-sm bx-tada-hover' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#dua">
                    <i class='bx bx-user bx-sm bx-tada-hover'></i>
                    <span class="links_name">Participant</span>
                </a>
                <span class="tooltip">Participant</span>

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


    <div id="satu" class="container">
        <div class="baru">
        <h1  class="babi">Dashboard</h1>

        <div class="filter">
            <div class="filter1">
                <i class='bx bx-filter-alt bx-sm'></i>
                <h2>Filter</h2>
                <div class="search">
                    <form action="{{url('/cari')}}" method="GET">

                        <input type="text" name="cari" class="cari" placeholder="Search" value="{{ old('cari') }}">
                        <i class='bx bx-search' ></i>
                    </form>

                </div>
            </div>
            <div class="filter2">
                <!-- <a href="#">All</a>
                <a href="#">Verified</a>
                <a href="#">Unverified</a>
                <a href="#">Rejected</a> -->
                <form type="get" action="{{url('/sort')}}">
                    <button type="submit">Sort</button>
                </form>


                <button>Verified</button>
                <button>Unverified</button>
                <button>Rejected</button>
            </div>
        </div>

        <table class="content-table">
            <thead>
                <tr>
                    <th class="satu">Group <i class='bx bx-down-arrow-alt'></i></th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th class="dua">View</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user )
                <tr>
                    <td>{{ $user->namagroup}}</td>
                    <td>Rp 100.000</td>
                    <td>{{ $user->verify}}</td>
                    <td>
                        <form action="{{route('uploadverify')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="verify" id="verify" class="form-select @error('verify') is-invalid @enderror" value="{{ old('verify') }}">
                            <option selected></option>
                            <option>Verified</option>
                            <option>Unverified</option>
                        </select>
                        <button id="hijau" type="submit" class="bx bx-check-square bx-sm tada-hover "></button>

                    </form>
                    </td>
                    <td>
                        <a id="kuning" class='bx bx-low-vision bx-sm tada-hover' href="/bukti"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


      {{-- <h1>Data Tim</h1>
      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Tim</th>
            <th scope="col">Harga Pendaftaran</th>
            <th scope="col">Status</th>
            <th scope="col">Verify</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            {{-- looping --}}
            {{-- <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->namagroup}}</td>
                <td>100.000</td>
                <td>{{ $user->verify}}</td>
                <td>
                    <form action="{{route('uploadverify')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="verify" id="verify" class="form-select @error('verify') is-invalid @enderror" value="{{ old('verify') }}">
                            <option selected></option>
                            <option>Verified</option>
                            <option>Unverified</option>
                        </select>

                        <button type="submit" class="btn btn-info">Submit</button>


                    </form>

                </td>
                <td>
                    <form action="{{route('bukti')}}">
                        <button type="submit" class="btn btn-primary">View</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table> --}}


      <div id="dua" class="participant">
        <div class="baru2">
            <h1  class="babi2">Participant</h1>

            <div class="filter3">
                <div class="filter4">
                    <i class='bx bx-filter-alt bx-sm'></i>
                    <h2>Filter</h2>
                    <div class="search2">
                        <form action="{{url('/cari')}}" method="GET">

                            <input type="text" name="cari" class="cari" placeholder="Search" value="{{ old('cari') }}">
                            <i class='bx bx-search' ></i>
                        </form>
                    </div>

                </div>
                <div class="filter5">
                    <!-- <a href="#">All</a>
                    <a href="#">Verified</a>
                    <a href="#">Unverified</a>
                    <a href="#">Rejected</a> -->

                    <form type="get" action="{{url('/sort')}}">
                        <button type="submit">Sort</button>
                    </form>

                    <button>Verified</button>
                    <button>Unverified</button>
                    <button>Rejected</button>
                </div>

        <table class="content-table3">
            <thead>
                <tr>
                    <th class="satu2">Group <i class='bx bx-down-arrow-alt'></i></th>
                    <th>View</th>
                    <th>Edit</th>
                    <th class="satu3">Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user )
                <tr>
                    <td>{{ $user->namagroup}}</td>
                    <td>
                        <a id="oren" class='bx bx-low-vision bx-sm tada-hover' href="/viewdataadmin"></a>
                        {{-- <form action="{{route('viewdataadmin')}}">
                            <button type="submit" class="btn btn-primary">View</button>
                        </form> --}}
                    </td>
                    <td>
                        <a id="putih"class='bx bx-pencil bx-sm tada-hover' href="/viewdataeditleader" ></a>
                        {{-- <form action="{{route('viewdataeditleader')}}">
                            <button id type="submit" class="btn btn-success">Edit</button>
                        </form> --}}
                    </td>
                    <td>
                        {{-- <a id="mewah" class='bx bx-trash bx-sm tada-hover' href="#"></a> --}}
                        <form action="{{route('delete', ['id' =>$user->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button id="mewah" type="submit" class="bx bx-trash bx-sm tada-hover"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>
</html>
