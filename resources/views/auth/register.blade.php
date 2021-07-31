@extends('layouts.app')

@section('content')
<div class="container" style="background-color: none; padding-top: 9%;">
    <div class="row justify-content-center" style="background-color: none;">
        <div class="col-md-8" style="background: none;">
            <div class="card" style="background: none; border: none;">
                <div class="card-header" style="text-align: center; border: none; font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace">{{ __('Register Page') }}</div>

                <div class="card-body" style="background: none;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="background: none;">
                            <label for="noAdmin" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('NoAdmin') }}</label>

                            <div class="col-md-6">
                                <input id="noAdmin" style="background: none;" type="text" class="form-control @error('name') is-invalid @enderror" name="noAdmin" value="{{ old('noAdmin') }}" required autocomplete="noAdmin" autofocus>

                                @error('noAdmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="background: none;">
                            <label for="name" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" style="background: none;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tglLhr" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('tanggal lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tglLhr" style="background: none;" style="background-color: none;" type="date" class="form-control @error('tglLhr') is-invalid @enderror" name="tglLhr" value="{{ old('tglLhr') }}" required autocomplete="tglLhr">

                                @error('tglLhr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="background: none;">
                            <label for="alamat" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" style="background: none;" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="background: none;" style="background-color: none;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password"  style="background: none;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" style="font-size: 20px; color: white; font-family: 'Courier New', Courier, monospace" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm"  style="background: none;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
