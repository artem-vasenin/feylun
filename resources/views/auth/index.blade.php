@extends('auth.layouts.main')

@section('content')
  <div class="container h-100">
    <div class="row h-100">
      <div class="auth-login col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4 d-flex flex-column align-items-sm-center justify-content-center">
        <h1 class="mb-5">Авторизация</h1>

        <form action="{{ route('auth.login')  }}" method="post" class="auth-form w-100">
          @csrf
          <div class="input-group mb-3">
            <span class="input-group-text auth-login-prepend" id="inputGroup-sizing-sm">E-mail</span>
            <input
              type="email"
              name="email"
              class="form-control @error('email') is-invalid @enderror"
              placeholder="Email"
              value="{{ old('email') }}"
            >

            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text auth-login-prepend" id="inputGroup-sizing-sm">Пароль</span>
            <input
              type="password"
              name="password"
              class="form-control @error('password') is-invalid @enderror"
              placeholder="Пароль"
            >

            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="row d-flex align-items-sm-center mt-5">
            <div class="col-6">
              <a href="{{ route('auth.regForm') }}" >Регистрация</a>
            </div>
            <div class="col-6 text-end">
              <button type="submit" class="btn btn-primary btn-block">Войти</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
