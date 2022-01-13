<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackaton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <h1>Update Member</h1>

    <div id="formulir">
        <form action="{{route('updatemember', ['id' => $member -> id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-header">{{ __('Informasi Member') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('member') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="namemember" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                        <div class="col-md-6">
                            <input id="namemember" type="text" class="form-control @error('namemember') is-invalid @enderror" name="namemember" value="{{ $member->namemember }}" required autocomplete="namemember" autofocus placeholder="Input Name">

                            @error('namemember')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email1" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email1" type="email1" class="form-control @error('email1') is-invalid @enderror" name="email1" value="{{ $member->email1 }}" required autocomplete="email1" placeholder="Input Email">

                            @error('email1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="whatsapp1" class="col-md-4 col-form-label text-md-right">{{ __('Whatssapp Number') }}</label>

                        <div class="col-md-6">
                            <input id="whatsapp1" type="numeric" class="form-control @error('whatsapp1') is-invalid @enderror" name="whatsapp1" value="{{ $member->whatsapp1 }}" required autocomplete="whatsapp1" placeholder="Input Number">

                            @error('whatsapp1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="line1" class="col-md-4 col-form-label text-md-right">{{ __('Line ID') }}</label>

                        <div class="col-md-6">
                            <input id="line1" type="text" class="form-control @error('line1') is-invalid @enderror" name="line1" value="{{ $member->line1 }}" required autocomplete="line1" placeholder="Input Line ID">

                            @error('line1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="github1" class="col-md-4 col-form-label text-md-right">{{ __('Github ID') }}</label>

                        <div class="col-md-6">
                            <input id="github1" type="text" class="form-control @error('github1') is-invalid @enderror" name="github1" value="{{$member->github1 }}" required autocomplete="github1" placeholder="Input Github">

                            @error('github1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="place1" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                        <div class="col-md-6">
                            <input id="place1" type="text" class="form-control @error('place1') is-invalid @enderror" name="place1" value="{{ $member->place1 }}" required autocomplete="place1" placeholder="Input Birth Place">

                            @error('place1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date1" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control @error('date1') is-invalid @enderror" name="date1" value="{{ $member->date1 }}" required autocomplete="date1" placeholder="Input Birth Date">

                            @error('date1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cv1" class="col-md-4 col-form-label text-md-right">{{ __('Upload CV') }}</label>

                        <div class="col-md-6">
                            <input id="cv1" type="file" class="form-control @error('cv1') is-invalid @enderror" name="cv1" value="{{ $member->cv1 }}" required autocomplete="cv1">

                            @error('cv1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="card1" class="col-md-4 col-form-label text-md-right">{{ __('Upload Flazz Card (Binusian)') }}</label>

                        <div class="col-md-6">
                            <input id="card1" type="file" class="form-control @error('card1') is-invalid @enderror" name="card1" value="{{ $member->card1 }}" required autocomplete="card1">

                            @error('card1')
                                <span class="invalid-feedback" role="alert">
                                    <div class="alert alert-danger">{{$message}}</div>
                                </span>
                            @enderror
                        </div>
                    </div>


            <button type="submit" class="btn btn-info">Update</button>


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
