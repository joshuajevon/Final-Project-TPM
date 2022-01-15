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

      {{-- <h1>admin participant</h1>

      <h1>Data Tim</h1>
      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Tim</th>
            <th scope="col">View Data</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            {{-- looping --}}
            {{-- <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->namagroup}}</td>
                <td> <form action="{{route('viewdataadmin')}}">
                    <button type="submit" class="btn btn-primary">View</button>
                </form>
            </td>
                <td>
                    <form action="{{route('viewdataeditleader')}}">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>

                  <form action="{{route('delete', ['id' =>$user->id])}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Delete</button>
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
                        <input class="cari2" type="text" placeholder="Search">
                        <i class='bx bx-search' ></i>
                    </div>
                </div>
                <div class="filter5">
                    <!-- <a href="#">All</a>
                    <a href="#">Verified</a>
                    <a href="#">Unverified</a>
                    <a href="#">Rejected</a> -->

                    <button>All</button>
                    <button>Verified</button>
                    <button>Unverified</button>
                    <button>Rejected</button>
                </div>

        <table class="content-table2">
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
