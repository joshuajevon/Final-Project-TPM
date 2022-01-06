@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="namagroup" class="col-md-4 col-form-label text-md-right">{{ __('Nama Group') }}</label>

                            <div class="col-md-6">
                                <input id="namagroup" type="text" class="form-control @error('namagroup') is-invalid @enderror" name="namagroup" value="{{ old('namagroup') }}" required autocomplete="namagroup" autofocus>

                                @error('namagroup')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="alert alert-danger">{{$message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="alert alert-danger">{{$message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password-confirm') }}" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="binus" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">

                                <select name="binus" id="binus" class="form-select @error('binus') is-invalid @enderror" value="{{ old('binus') }}">
                                    <option selected></option>
                                    <option>Binusian</option>
                                    <option>Non Binusian</option>
                                </select>

                                @error('binus')
                                    <span class="invalid-feedback" role="alert">
                                        <div class="alert alert-danger">{{$message}}</div>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-header">{{ __('Informasi Leader') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp">

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
                                        <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line" value="{{ old('line') }}" required autocomplete="line">

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
                                        <input id="github" type="text" class="form-control @error('github') is-invalid @enderror" name="github" value="{{ old('github') }}" required autocomplete="github">

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
                                        <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place') }}" required autocomplete="place">

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
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date">

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
                                        <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" required autocomplete="cv">

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
                                        <input id="card" type="file" class="form-control @error('card') is-invalid @enderror" name="card" value="{{ old('card') }}" required autocomplete="card">

                                        @error('card')
                                            <span class="invalid-feedback" role="alert">
                                                <div class="alert alert-danger">{{$message}}</div>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
