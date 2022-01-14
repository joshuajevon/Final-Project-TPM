@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Data Leader') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('updateleader', ['id' => $user -> id])}}">
                        @csrf
                        @method('patch')

                        <div class="card-header">{{ __('Informasi Leader') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="whatsapp" class="col-md-4 col-form-label text-md-right">{{ __('Whatssapp Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $user->whatsapp }}" required autocomplete="whatsapp">

                                        @error('whatsapp')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="line" class="col-md-4 col-form-label text-md-right">{{ __('Line ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{$user->line}}" required autocomplete="line">

                                        @error('line')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="github" class="col-md-4 col-form-label text-md-right">{{ __('Github ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="github" type="text" class="form-control @error('github') is-invalid @enderror" name="github" value="{{ $user->github }}" required autocomplete="github">

                                        @error('github')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                                    <div class="col-md-6">
                                        <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ $user->place }}" required autocomplete="place">

                                        @error('place')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $user->date }}" required autocomplete="date">

                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('Upload CV') }}</label>

                                    <div class="col-md-6">
                                        <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ $user->cv }}" required autocomplete="cv">

                                        @error('cv')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="card" class="col-md-4 col-form-label text-md-right">{{ __('Upload Flazz Card (Binusian) / ID Card (Non-Binusian)') }}</label>

                                    <div class="col-md-6">
                                        <input id="card" type="file" class="form-control @error('card') is-invalid @enderror" name="card" value="{{ $user->card }}" required autocomplete="card">

                                        @error('card')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
