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
                <a class="nav-link " aria-current="page" href="/viewdataeditleader">Edit Leader</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/viewdataedit">Edit Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/adminparticipant">Back</a>
              </li>

          </div>
        </div>
      </nav>

      <h1>Edit Data</h1>

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
            <th scope="col">Edit</th>
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
                <td>
                    <a href="{{route('getDataById', ['id' => $member -> id])}}">
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
