@extends('layouts.app')

@section('content')

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .card {
    width: 500px;
    height: auto;
    padding: 20px;
    margin: 50px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    border-radius: 10px;
  }

  .card-header {
    font-size: 30px;
    font-weight: 100;
    margin-bottom: 30px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid lightgray;
    font-size: 14px;
  }

  .btn {
    width: 150px;
    padding: 10px;
    margin-top: 20px;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
  }

  .btn:hover {
    background-color: #0069d9;
  }

  .invalid-feedback {
    color: red;
    font-size: 14px;
    font-weight: bold;
    margin-top: 10px;
  }

  .btn-link, label {
    text-align: left;
    font-size: 16px;
  }

  .form-label {
    padding-bottom: 10px;
    display: block;
  }

  .center {
    text-align: center;
  }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header center">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check form-label">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            @if (Route::has('password.request'))
                            <div class="center" style="padding-top: 10px">
                                <a class="nav-link" href="{{ route('register') }}">{{ __("Don't have any account?") }}</a>
                            </div>
                                @endif
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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