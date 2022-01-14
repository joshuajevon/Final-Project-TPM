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
                <a class="nav-link  active" aria-current="page" href="/viewdataeditleader">Edit Leader</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/viewdataedit">Edit Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/adminparticipant">Back</a>
              </li>

          </div>
        </div>
      </nav>

      <h1>Edit Data</h1>
      <h2>DATA LEADER</h2>

      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            {{-- looping --}}
            <tr>
                <td>
                    {{$user->id}}
                </td>
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
                <td>
                    {{-- CV : {{ Auth::user()->cv }} --}}
                    <form action="{{route('viewdataleader')}}">
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
                <td>
                    <a href="{{route('getDataLeaderById', ['id' => $user -> id])}}">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
      </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
