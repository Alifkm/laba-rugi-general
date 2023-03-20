@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
  <div class="row w-100 d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card" style="background-color: light;">
        <div class="card-header text-center">{{ __('Admin Login') }}</div>

        <div class="card-body">
          <div class="">
            <img src="{{url('/img/admin-panel2.png')}}" id="icon" class="rounded mx-auto d-block " style="max-width: 150px;" alt="User Icon" />

          </div>
           
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3 ml-3 d-flex flex-column align-items-center m-auto" style="width:50%;">
                <label for="email" class="d-flex align-self-start col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="w-100">
                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="row mb-3 d-flex flex-column align-items-center m-auto" style="width:50%;">
                <label for="password" class=" d-flex align-self-start  col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="w-100">
                  <div class="input-container">
                  <i class="fa fa-key icon"></i>
                  <input id="password" type="password"
                  data-toggle="password"
                  data-eye-class="material-icons"
                  data-eye-open-class="visibility"
                  data-eye-close-class="visibility_off"
                  data-eye-class-position-inside="true" class="form-control @error('current_password') is-invalid @enderror" id="current_password"
                  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- <div class="row mb-3 d-flex flex-column align-items-start w-50 m-auto">
                <div class="d-flex align-self-start col-form-label text-md-end">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div> --}}

              <div class="w-100 d-flex justify-content-center">
                <div class="align-self-center d-flex justify-content-center w-100">
                  <button type="submit" class="btn btn-primary w-50">
                    {{ __('Login') }}
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
